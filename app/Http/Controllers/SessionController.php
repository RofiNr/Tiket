<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    function index(){
        return view("sesi/masuk");
    }
    function login(Request $request){
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',

        ]);

         $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
         ];

         if(Auth::attempt($infologin)){
            //Jika autentikasi sukses
            return redirect('homepage');
         }else{
            //Jika autentikasi gagal
            return redirect('sesi')->withErrors('Username dan Password yang dimasukkan tidak valid');
         }

    }
    function logout(){
        Auth::logout();
        return redirect('sesi')->with('Logout Berhasil');
    }
}
