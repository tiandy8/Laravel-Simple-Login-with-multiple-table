<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginTeacher()
    {
        return view('login_teacher');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('home');
        }

        return back()->with('error','Eror bang loginnya');
    }

    public function processTeacher(Request $request)
    {


        $datas = $request->only('nis','password');

        if (Auth::guard('teacher')->attempt($datas)) {
            $request->session()->regenerate();

            return redirect('home');
        }

        return redirect('login-teacher')->with('error', 'pokokny ad yg error');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
