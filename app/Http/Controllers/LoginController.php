<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getLogin() {
        return view('page.login');
    }

    public function postLogin(Request $request) {
        $email = $request->get('email');
        $password = $request->get('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/home');
        } else {
            return redirect()->back();
        }
        
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
