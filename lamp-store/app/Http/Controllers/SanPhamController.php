<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    /**
     * Hiển thị form thêm sản phẩm
     */
    public function create()
    {
        // Lấy danh sách danh mục đang hoạt động (trạng thái khác 'Ẩn')
        $danhmuc = DanhMuc::where('TrangThai', '!=', 'Ẩn')->get();

        return view('admin.create', compact('danhmuc'));

    }

    /**
     * Lưu sản phẩm mới vào cơ sở dữ liệu
     */
    public function store(Request $request)
    {
        // ✅ 1. Kiểm tra dữ liệu đầu vào
        $validated = $request->validate([
            'TenSP' => 'required|string|max:50',
            'Gia' => 'required|numeric|min:0',
            'GiaKhuyenMai' => 'nullable|numeric|min:0',
            'MoTa' => 'nullable|string|max:255',
            'MaDM' => 'required|exists:danhmuc,id',
            'Hinh' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'Tags' => 'nullable|string|max:100',
            'TrangThai' => 'nullable|string|max:20',
            'Loai' => 'nullable|string|max:20',
        ]);

        // ✅ 2. Xử lý upload hình ảnh nếu có
        $hinhanh = null;
        if ($request->hasFile('Hinh')) {
            $hinhanh = $request->file('Hinh')->store('uploads/sanpham', 'public');
        }

        // ✅ 3. Tạo sản phẩm mới
        SanPham::create([
            'TenSP' => $validated['TenSP'],
            'Gia' => $validated['Gia'],
            'GiaKhuyenMai' => $validated['GiaKhuyenMai'] ?? 0,
            'Hinh' => $hinhanh,
            'MoTa' => $validated['MoTa'] ?? '',
            'MaDM' => $validated['MaDM'],
            'Tags' => $validated['Tags'] ?? '',
            'TrangThai' => $validated['TrangThai'] ?? 'Đang bán',
            'UserID' => auth()->id() ?? 1, // Nếu có login thì lấy user hiện tại
            'Loai' => $validated['Loai'] ?? 'Thường',
        ]);

        // ✅ 4. Quay lại trang thêm sản phẩm với thông báo
        return redirect()
            ->route('sanpham.create')
            ->with('success', 'Thêm sản phẩm thành công!');
    }

        public function edit($MaSP)
        {
            // Tìm sản phẩm theo MaSP
            $sanPham = SanPham::findOrFail($MaSP);

            // Lấy danh sách danh mục đang hoạt động
            $danhmuc = DanhMuc::where('TrangThai', '!=', 'Ẩn')->get();

            // Trả về view 'admin.edit' và truyền dữ liệu đi
            return view('admin.edit', compact('sanPham', 'danhmuc'));
        }
/**
 * Cập nhật sản phẩm vào cơ sở dữ liệu.
 */
        public function update(Request $request, $MaSP)
        {
            // 1. Kiểm tra dữ liệu đầu vào (Validation)
            $validated = $request->validate([
                'TenSP' => 'required|string|max:50',
                'Gia' => 'required|numeric|min:0',
                'GiaKhuyenMai' => 'nullable|numeric|min:0',
                'MoTa' => 'nullable|string|max:255',
                'MaDM' => 'required|exists:danhmuc,id', // Kiểm tra lại 'id'
                'Hinh' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Có thể là null khi không đổi ảnh
                'Tags' => 'nullable|string|max:100',
                'TrangThai' => 'nullable|string|max:20',
                'Loai' => 'nullable|string|max:20',
            ]);

            // Tìm sản phẩm hiện tại
            $sanPham = SanPham::findOrFail($MaSP);
            $data = $validated;

            // 2. Xử lý upload và xóa hình ảnh cũ
            if ($request->hasFile('Hinh')) {
                // Xóa ảnh cũ (nếu có)
                if ($sanPham->Hinh) {
                    Storage::disk('public')->delete($sanPham->Hinh);
                }
                // Upload ảnh mới
                $data['Hinh'] = $request->file('Hinh')->store('uploads/sanpham', 'public');
            } else {
                // Giữ lại đường dẫn ảnh cũ nếu không có file mới được upload
                $data['Hinh'] = $sanPham->Hinh; 
            }

            // 3. Cập nhật sản phẩm
            $sanPham->update($data);

            // 4. Chuyển hướng về trang danh sách với thông báo
            return redirect()->route('sanpham.index')->with('success', 'Cập nhật sản phẩm thành công!');
        }
/**
 * Xóa sản phẩm khỏi cơ sở dữ liệu.
 */
        public function destroy($MaSP)
        {
            $sanPham = SanPham::findOrFail($MaSP);

            // 1. Xóa hình ảnh liên quan khỏi storage (nếu có)
            if ($sanPham->Hinh) {
                Storage::disk('public')->delete($sanPham->Hinh);
            }

            // 2. Xóa bản ghi trong database
            $sanPham->delete();

            // 3. Chuyển hướng về trang danh sách với thông báo
            return redirect()->route('sanpham.index')->with('success', 'Xóa sản phẩm thành công!');
        }
}
