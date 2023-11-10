<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
      
        return view('admin.dashboard');  // تنفيذ عملية تسجيل الدخول هنا
    }

    protected function authenticated(Request $request, $user)
{
    return redirect()->route('admin.dashboard');
}
}

