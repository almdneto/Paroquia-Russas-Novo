<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        if (!Auth::check()) {
            return redirect()->route('login.form');
        }

        $users = User::all();

        return view('users.index', compact('users'));
    }
}
