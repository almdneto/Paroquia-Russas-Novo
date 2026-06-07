<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Login
    public function loginForm()
    {
        if (Auth::check()) {
            return $this->redirectAfterLogin();
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return $this->redirectAfterLogin();
        }
        return redirect()->route('login')->with('error', 'E-mail ou senha inválidos.');
    }

    // Register
    public function registerForm()
    {
        if (Auth::check()) {
            return $this->redirectAfterLogin();
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        Auth::login($user);

        return $this->redirectAfterLogin();
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    private function redirectAfterLogin()
    {
        if ((int) Auth::user()?->access_level === 1) {
            return redirect()->route('users.index');
        }

        return redirect()->route('calendar.index');
    }
}
