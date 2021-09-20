<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function TampilLogin(){
        return view('login.login');
    }

    public function PostLogin(Request $request){
        if(Auth::attempt([$request->only('email','password')])){
            return redirect('/home');
        }
        return redirect('/');
    }
}
