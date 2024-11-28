<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('backoffice.pages.auth.login', [
            'page_title' => 'Login Form'
        ]);
    }
    function login(Request $request)
    {
        $data = User::where('username', $request->username)->first();
        $formdata = $request->only(['username', 'password']);
        if ($data == null) {
            return redirect()->back()->with('error', 'Username belum terdaftar!');
        }
        if (Auth::attempt($formdata)) {
            return redirect()->route('admin.school.index')->with('success', 'Login Berhasil');
        }
        return redirect()->back()->with('error', 'Username dan Password tidak match!');
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('auth.index')->with('success', 'Logout Berhasil');
    }
}
