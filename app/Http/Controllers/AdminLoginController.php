<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin.admin_login');
    }

    public function loginProcess(AdminLoginRequest $request)
    {

        if (Auth::guard('admin')->attempt($request->validated())) {
            $request->session()->regenerate();
            return redirect(route('admin-post-index'));
        }

        return redirect(route('login-admin'))->withErrors([
            'password' => 'Пароль введен не верно',
        ]);
    }
}
