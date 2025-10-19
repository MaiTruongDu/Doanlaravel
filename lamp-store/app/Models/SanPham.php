<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'sanpham';
    protected $primaryKey = 'MaSP';
    public $timestamps = false;

    protected $fillable = [
        'TenSP', 'Gia', 'GiaKhuyenMai', 'Hinh', 'MoTa',
        'MaDM', 'Tags', 'TrangThai', 'UserID', 'Loai'
    ];
}
