<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){
        return view('pages.auth.login');
    }

    public function logMe(Request $request){
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            auth()->user()->loginTask();
            return redirect()->route('dashboard');
        }
        return back()->withErrors($request);
    }

    public function register(){

    }

    public function registerMe(Request $request){
        return $request;
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('auth.login');
    }
}
