<?php

namespace App\Http\Controllers;

use App\Actions\UserCreateAction;
use App\DTO\UserCreateDTO;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showRestoreForm()
    {
        return view('auth.forgot');
    }

    public function storeRegister(RegistrationRequest $request, UserCreateAction $action)
    {
        Auth::login($action(new UserCreateDTO(...$request->validated())));
        return redirect(route('home'));
    }

    public function storeLogin(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect(route('home'));
        }

        return redirect(route('login'))->withErrors([
            'password' => 'Пароль введен не верно',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
