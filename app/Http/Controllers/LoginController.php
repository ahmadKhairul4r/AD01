<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view ('auth.login');
    }
    public function login_proses(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Cek autentikasi
        if (Auth::attempt($data)) {
            $request->session()->regenerate(); // Regenerate session
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil!'); // Redirect ke dashboard
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }
}
