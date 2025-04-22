<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        return view('login');
    }

 
    public function login(Request $request)
    {
        
        $email = 'abc@gmail.com';
        $password = 'password123';

        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
        if ($request->email === $email && $request->password === $password) {
            session(['logged_in' => true]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    
    public function logout()
    {
        session()->forget('logged_in');
        return redirect('/login')->with('success', 'Berhasil logout!');
    }

    public function dashboard()
    {
        if (!session('logged_in')) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        return view('dashboard');
    }
}
