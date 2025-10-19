<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAdmin; // thêm dòng này

class AdminAuthController extends Controller
{
    /**
     * Hiển thị form đăng nhập admin
     */
    public function showLoginForm()
    {
        // Nếu admin đã đăng nhập → chuyển về dashboard
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.index_admin');
        }

        return view('admin.login_admin');
    }

    /**
     * Xử lý đăng nhập admin
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ]);

        $credentials = $request->only('email', 'password');

        // Dùng guard admin (để tách biệt user thường)
        if (Auth::guard('admin')->attempt($credentials)) {
            // Nếu có trang yêu cầu trước đó thì chuyển tới
            return redirect()->intended(route('admin.index_admin'));
        }

        // Nếu sai thông tin
        return back()->withErrors(['error' => 'Sai email hoặc mật khẩu!'])->withInput();
    }

    /**
     * Đăng xuất admin
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login_admin');
    }
}
