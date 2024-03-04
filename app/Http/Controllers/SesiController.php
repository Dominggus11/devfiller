<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request) 
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ], [
        'email.required' => 'Email Wajib Diisi',
        'password.required' => 'Password Wajib Diisi',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/operator');
        }
    } else {
        return redirect('')->withErrors('Username Atau Password Salah')->withInput();
    }
}


    function logout()
    {
        Auth::logout();
        return redirect('');
    }
    

}
