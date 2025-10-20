<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\UserController;
class PageController extends Controller
{
   public function home(): string
    {
        return ("Chào mừng đến trang chủ ");
    }
    public function detail(): View
    {
        return view('details');
    }
}
