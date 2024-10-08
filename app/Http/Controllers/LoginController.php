<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

//class LoginController extends Controller
//{
//    public function index()
//    {
//        return view('backend.auth.login');
//    }
//
//    public function doLogin(Request $request)
//    {
//        $credantial = [
//            'user' => $request->input('user'),
//            'password' => $request->input('password'),
//        ];
//
//        $login = Auth::attempt($credantial);
//
//        if ($login){
//            return redirect()->route('dashboard');
//        }else{
//            Session::flash('failed', 'Login Failed');
//            return redirect()->back();
//        }
//    }
//
//    public function logout()
//    {
//        Auth::logout();
//        return redirect()->route('login');
//    }
//}

//
//class LoginController extends Controller
//
//{
//
//    public function  index(){
//
//        return view('backend.auth.login');
//    }
//
//
//
//    public function doLogin(Request $request){
//
//        $credantial = [
//            'email' =>$request->input('email'),
//            'password' =>$request->input('password'),
//        ];
//
//        $login = Auth::attempt($credantial);
//
////        dd($request->all());
//        if($login){
//            return redirect->()route('dashboard');
//        }
//    }
//
//
//
//
//
//
//}










class LoginController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('dashboard'); // Redirect to intended page after login
        } else {
            // Authentication failed
            Session::flash('failed', 'Login Failed');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

