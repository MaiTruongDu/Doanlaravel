<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;

    // 🟢 Tên bảng thật trong database (không có 's')
    protected $table = 'danhmuc';

    // 🟢 Nếu khóa chính của bảng là ID (chữ hoa), cần khai báo thủ công
    protected $primaryKey = 'ID';

    // 🟢 Cho phép fill dữ liệu
    protected $fillable = [
        'TenDM',
        'TrangThai',
        'MoTa'
    ];

    // (Tùy chọn) Nếu không dùng timestamps (created_at, updated_at)
    public $timestamps = false;
}
