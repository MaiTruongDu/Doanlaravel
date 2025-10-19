<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            // Lưu trang trước khi bị chuyển hướng
            session(['url.intended' => $request->url()]);
            return redirect()->route('admin.login_admin');
        }

        return $next($request);
    }
}
