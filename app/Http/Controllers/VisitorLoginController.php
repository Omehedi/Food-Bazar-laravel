<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class VisitorLoginController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data, including the 'name' field
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $visitor = new Visitor();


        $visitor->fill($request->except('password'));


        $visitor->password = Hash::make($request->password);


        $visitor->save();


        $data['url'] = $request->input('url');
        return redirect()->route('comment.index', $data);
    }

    public function visitor_do_login(Request $request)
    {

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];


        $login = Auth::guard('visitor')->attempt($credentials);

//        dd($request->input('url'));
        if ($login) {

            return redirect()->to($request->input('back_url'));

        } else {

            Session::flash('failed', 'Login failed');
            return redirect()->back();
        }


    }


}
