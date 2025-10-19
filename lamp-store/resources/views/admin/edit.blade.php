@extends('layouts.app_admin')

@section('title', 'Chỉnh Sửa Sản Phẩm')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Chỉnh Sửa Sản Phẩm: {{ $sanPham->TenSP }}</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin Sản phẩm (Mã: {{ $sanPham->MaSP }})
            </div>
            <div class="panel-body">
                {{-- FORM GỬI DỮ LIỆU CẬP NHẬT --}}
                {{-- Method POST với @method('PUT') sẽ gửi yêu cầu PUT đến route sanpham.update --}}
                <form role="form" action="{{ route('sanpham.update', ['MaSP' => $sanPham->MaSP]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- 📢 HIỂN THỊ THÔNG BÁO LỖI (nếu có) --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- 1. Tên sản phẩm --}}
                    <div class="form-group">
                        <label>Tên sản phẩm *</label>
                        {{-- Dùng old() nếu có lỗi, ngược lại dùng dữ liệu hiện tại từ $sanPham --}}
                        <input class="form-control" name="TenSP" 
                               value="{{ old('TenSP', $sanPham->TenSP) }}" required>
                    </div>

                    {{-- 2. Giá --}}
                    <div class="form-group">
                        <label>Giá *</label>
                        <input class="form-control" type="number" name="Gia" 
                               value="{{ old('Gia', $sanPham->Gia) }}" required>
                    </div>

                    {{-- 3. Giá khuyến mãi --}}
                    <div class="form-group">
                        <label>Giá khuyến mãi</label>
                        <input class="form-control" type="number" name="GiaKhuyenMai" 
                               value="{{ old('GiaKhuyenMai', $sanPham->GiaKhuyenMai) }}">
                    </div>

                    {{-- 4. Mô tả --}}
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="MoTa" rows="3">{{ old('MoTa', $sanPham->MoTa) }}</textarea>
                    </div>

                    {{-- 5. Danh mục --}}
                    <div class="form-group">
                        <label>Danh mục *</label>
                        <select class="form-control" name="MaDM" required>
                            <option value="">-- Chọn Danh Mục --</option>
                            @foreach ($danhmuc as $dm)
                                @php
                                    // Kiểm tra xem danh mục nào đang được chọn, ưu tiên old()
                                    $selected = (old('MaDM', $sanPham->MaDM) == $dm->id) ? 'selected' : '';
                                @endphp
                                <option value="{{ $dm->id }}" {{ $selected }}>
                                    {{ $dm->TenDM }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- 6. Tags --}}
                    <div class="form-group">
                        <label>Tags</label>
                        <input class="form-control" name="Tags" 
                               value="{{ old('Tags', $sanPham->Tags) }}" placeholder="Ví dụ: hot, sale, mới">
                    </div>

                    {{-- 7. Loại sản phẩm --}}
                    <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select class="form-control" name="Loai">
                            @php $currentLoai = old('Loai', $sanPham->Loai); @endphp
                            <option value="Thường" {{ $currentLoai == 'Thường' ? 'selected' : '' }}>Thường</option>
                            <option value="Cao cấp" {{ $currentLoai == 'Cao cấp' ? 'selected' : '' }}>Cao cấp</option>
                        </select>
                    </div>
                    
                    {{-- 8. Trạng thái --}}
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="TrangThai">
                            @php $currentTrangThai = old('TrangThai', $sanPham->TrangThai); @endphp
                            <option value="Đang bán" {{ $currentTrangThai == 'Đang bán' ? 'selected' : '' }}>Đang bán</option>
                            <option value="Ngừng bán" {{ $currentTrangThai == 'Ngừng bán' ? 'selected' : '' }}>Ngừng bán</option>
                        </select>
                    </div>

                    {{-- 9. Hình ảnh --}}
                    <div class="form-group">
                        <label>Hình ảnh hiện tại</label>
                        @if ($sanPham->Hinh)
                            {{-- Giả định đã có Accessor image_url hoặc dùng Storage::url() --}}
                            <img src="{{ asset('storage/' . $sanPham->Hinh) }}" alt="Hình ảnh hiện tại" style="width: 100px; height: 100px; object-fit: cover; margin-bottom: 10px;">
                        @else
                            <p>Không có hình ảnh.</p>
                        @endif
                        <label>Chọn hình ảnh mới (Không chọn nếu muốn giữ lại)</label>
                        <input type="file" name="Hinh" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning">Cập Nhật Sản Phẩm</button>
                    <a href="{{ route('sanpham.index') }}" class="btn btn-default">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection