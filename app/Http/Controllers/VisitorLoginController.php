<?php
//
//namespace App\Http\Controllers;
//use App\Models\Visitor;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Testing\Fluent\Concerns\Has;
//use mysql_xdevapi\Session;
//
//class VisitorLoginController extends Controller
//{
//    public function store(Request $request){
////        dd($request->all());
//
//        $visitor= new Visitor();
//        $visitor->fill($request->all());
//        $visitor->password = Hash::make($request->password);
//        $visitor->save();
//
//
//        $data['url']=\request()->input('url');
//        return redirect()->route('comment.index',$data);
//    }
//
//
////    public function store(Request $request) {
////        // Validate the incoming request data, including the 'name' field
////        $request->validate([
////            'name' => 'required|string|max:255',
////            'email' => 'required|string|email|max:255',
////            'password' => 'required',
////        ]);
////
////        // Create a new Visitor instance and fill in the request data
////        $visitor = new Visitor();
////        $visitor->name = $request->input('name');
////        $visitor->email = $request->input('email');
////        $visitor->password = Hash::make($request->input('password'));
////
////        // Save the Visitor to the database
////        $visitor->save();
////
////        // Redirect to the comment.index route with the provided 'url'
////        $data['url']=\request()->input('url');
////        return redirect()->route('comment.index',$data);
////    }
//
//
//    public function login(Request $request){
////        dd($request->all());
//
//        $credential = [
//
//            'email' =>$request->input('email'),
//            'password'=>$request->input('password'),
//
//        ];
//
//        $login= Auth::guard('visitor')->attempt($credential);
//
//        if($login){
//            return redirect()->url($request->input('url'));
//        }else{
//            Session::flash('failed','login failed');
//            return redirect()->back();
//        }
//    }
//
//
//
//}





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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:visitors,email',
            'password' => 'required',
        ]);

        // Create a new Visitor instance
        $visitor = new Visitor();

        // Fill the Visitor with validated data, excluding the password
        $visitor->fill($request->except('password'));

        // Hash the password and assign it to the model
        $visitor->password = Hash::make($request->password);

        // Save the Visitor to the database
        $visitor->save();

        // Redirect to the comment.index route with the provided 'url'
        $data['url'] = $request->input('url');
        return redirect()->route('comment.index', $data);
    }

    public function visitor_do_login(Request $request)
    {
        // Retrieve the credentials from the request
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // Attempt to log in using the provided credentials
        $login = Auth::guard('visitor')->attempt($credentials);

//        dd($request->input('url'));
        if ($login) {
            // Redirect to the provided URL on successful login
            return redirect()->to($request->input('back_url'));

        } else {
            // Flash a login failed message and redirect back
            Session::flash('failed', 'Login failed');
            return redirect()->back();
        }


    }


}
