<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\View;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Home', [PageController::class, 'home']);
Route::get('/detail', [PageController::class, 'detail']);
// Route::get('/detail', function () {
//     return view('details');
// });
Route::get('/Search', function () {
    return view('search');
});
