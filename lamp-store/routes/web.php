<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index_user', function () {
    return view('user.index_user');
});

Route::get('/account', function () {
    return view('user.account');
});
Route::get('/checkout', function () {
    return view('user.checkout');
});

Route::get('/contact', function () {
    return view('user.contact');
});
Route::post('/contact', function () {
    return view('user.contact');
});

Route::get('/login_user', function () {
    return view('user.login_user');
});
Route::get('/product', function () {
    return view('user.product');
});
Route::get('/single', function () {
    return view('user.single');
});
Route::get('/typo', function () {
    return view('user.typo');
});

Route::get('/blank', function () {
    return view('admin.blank');
});

Route::get('/buttons', function () {
    return view('admin.buttons');
});

Route::get('/flot', function () {
    return view('admin.flot');
});

Route::get('/forms', function () {
    return view('admin.forms');
});

Route::get('/grid', function () {
    return view('admin.grid');
});
Route::get('/icons', function () {
    return view('admin.icons');
});
Route::get('/index_admin', function () {
    return view('admin.index_admin');
});
Route::get('/login_admin', function () {
    return view('admin.login_admin');
});
Route::get('/morris', function () {
    return view('admin.morris');
});
Route::get('/notifications', function () {
    return view('admin.notifications');
});
Route::get('/panels', function () {
    return view('admin.panels-wells');
});
Route::get('/tables', function () {
    return view('admin.tables');
});
Route::get('/typography', function () {
    return view('admin.typography');
});

Route::get('/sanpham/create', [SanPhamController::class, 'create'])->name('sanpham.create');
Route::post('/sanpham/store', [SanPhamController::class, 'store'])->name('sanpham.store');
Route::get('/admin/sanpham', [SanPhamController::class, 'index'])->name('SanPhamController.index'); // <-- Cần sửa
Route::get('/sanpham/{MaSP}/edit', [SanPhamController::class, 'edit'])->name('sanpham.edit');
Route::put('/sanpham/{MaSP}', [SanPhamController::class, 'update'])->name('sanpham.update');
Route::delete('/sanpham/{MaSP}', [SanPhamController::class, 'destroy'])->name('sanpham.destroy');