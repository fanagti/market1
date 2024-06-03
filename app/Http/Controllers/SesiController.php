<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
     function index()
    {
        return view('login');
    }
     function registerPage()
    {
        return view('register');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
        ]);

        $loginInfo = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($loginInfo)) {
            if(Auth::user()->is_admin) {
                return redirect('/admin');
            }
            return redirect('/');
        } else {
            return redirect('/sesi/login')->withErrors('Email dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout() {
        Auth::logout();
        return redirect('');
    }

    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:1',
            'gender' => 'required',
        ], [
            'name.required' => 'Nama diperlukan.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email diperlukan.',
            'email.email' => 'Email harus valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password diperlukan.',
            'password.min' => 'Password harus setidaknya 1 karakter.',
            'gender.required' => 'gender diperlukan.'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender
        ]);

        return redirect('/sesi/login');
    }

}
