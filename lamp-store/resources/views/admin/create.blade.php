@extends('layout.layout_admin')

@section('content')
<div class="container-fluid py-4">
    <h1 class="mb-4">Thêm Sản Phẩm</h1>

    {{-- Thông báo thành công --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Thông báo lỗi validate --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> Vui lòng kiểm tra lại thông tin bên dưới.
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- THÊM TRƯỜNG USERID ẨN --}}
                {{-- Giúp tự động gán ID của người dùng đang đăng nhập (người tạo sản phẩm) --}}
                @auth
                    <input type="hidden" name="UserID" value="{{ auth()->id() }}">
                @endauth
                {{-- Nếu bạn không sử dụng @auth, chỉ cần giữ: <input type="hidden" name="UserID" value="{{ auth()->id() }}"> --}}
                
                {{-- Tên sản phẩm --}}
                <div class="mb-3">
                    <label for="TenSP" class="form-label">Tên sản phẩm <span class="text-danger">*</span></label>
                    <input type="text" name="TenSP" value="{{ old('TenSP') }}" class="form-control @error('TenSP') is-invalid @enderror" placeholder="Nhập tên sản phẩm" required>
                    @error('TenSP')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Các trường khác giữ nguyên... --}}
                {{-- Giá --}}
                <div class="mb-3">
                    <label for="Gia" class="form-label">Giá <span class="text-danger">*</span></label>
                    <input type="number" name="Gia" value="{{ old('Gia') }}" class="form-control @error('Gia') is-invalid @enderror" placeholder="Nhập giá sản phẩm" required min="0">
                    @error('Gia')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Giá khuyến mãi --}}
                <div class="mb-3">
                    <label for="GiaKhuyenMai" class="form-label">Giá khuyến mãi</label>
                    <input type="number" name="GiaKhuyenMai" value="{{ old('GiaKhuyenMai') }}" class="form-control @error('GiaKhuyenMai') is-invalid @enderror" placeholder="Nhập giá khuyến mãi (nếu có)" min="0">
                    @error('GiaKhuyenMai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Mô tả --}}
                <div class="mb-3">
                    <label for="MoTa" class="form-label">Mô tả</label>
                    <textarea name="MoTa" class="form-control @error('MoTa') is-invalid @enderror" rows="3" placeholder="Nhập mô tả">{{ old('MoTa') }}</textarea>
                    @error('MoTa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Danh mục --}}
                <div class="mb-3">
                    <label for="MaDM" class="form-label">Danh mục <span class="text-danger">*</span></label>
                    <select name="MaDM" class="form-select @error('MaDM') is-invalid @enderror" required>
                        <option value="">-- Chọn danh mục --</option>
                        @foreach($danhmuc as $dm)
                            <option value="{{ $dm->ID }}" {{ old('MaDM') == $dm->ID ? 'selected' : '' }}>
                                {{ $dm->TenDM }}
                            </option>
                        @endforeach
                    </select>
                    @error('MaDM')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tags --}}
                <div class="mb-3">
                    <label for="Tags" class="form-label">Tags</label>
                    <input type="text" name="Tags" value="{{ old('Tags') }}" class="form-control @error('Tags') is-invalid @enderror" placeholder="Ví dụ: hot, new">
                    @error('Tags')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Loại sản phẩm --}}
                <div class="mb-3">
                    <label for="Loai" class="form-label">Loại sản phẩm</label>
                    <input type="text" name="Loai" value="{{ old('Loai') }}" class="form-control @error('Loai') is-invalid @enderror" placeholder="Ví dụ: Cao cấp, Thường...">
                    @error('Loai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Trạng thái --}}
                <div class="mb-3">
                    <label for="TrangThai" class="form-label">Trạng thái</label>
                    <select name="TrangThai" class="form-select @error('TrangThai') is-invalid @enderror">
                        <option value="Đang bán" {{ old('TrangThai') == 'Đang bán' ? 'selected' : '' }}>Đang bán</option>
                        <option value="Hết hàng" {{ old('TrangThai') == 'Hết hàng' ? 'selected' : '' }}>Hết hàng</option>
                        <option value="Ẩn" {{ old('TrangThai') == 'Ẩn' ? 'selected' : '' }}>Ẩn</option>
                    </select>
                    @error('TrangThai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Hình ảnh --}}
                <div class="mb-4">
                    <label for="Hinh" class="form-label">Hình ảnh</label>
                    <input type="file" name="Hinh" class="form-control @error('Hinh') is-invalid @enderror">
                    @error('Hinh')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Nút submit --}}
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Thêm sản phẩm
                </button>
            </form>
        </div>
    </div>
</div>
@endsection