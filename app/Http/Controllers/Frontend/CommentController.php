<?php
//
//namespace App\Http\Controllers\Frontend;
//
//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use App\Models\Comment;
//
//
//class CommentController extends Controller
//{
//    public function index(){
//        $data['url']=\request()->input('url');
//        return view('auth.visitor_login');
//    }
//
//
//    public function create(){
//        $data['url']=\request()->input('url');
//        return view('auth.visitor_registration');
//    }
//
//
//    public function store(Request $request){
////        dd($request->all());
//        $comment= new Comment;
//        $comment->visitor_id = auth()->guard('visitor')->user()->id;
//        $comment->title = $request->input('title');
//        $comment->comment = $request->input('message');
//        $comment->save();
//
//
//        return response()->json(['message' => 'Successfully created comment!','status' =>2000],2000 );
//    }
//}


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data['url'] = \request()->input('url');
        return view('auth.visitor_login');
    }

    public function create()
    {
        $data['url'] = \request()->input('url');
        return view('auth.visitor_registration');
    }

    public function store(Request $request)
    {
        try {
            $comment = new Comment();
            $comment->visitor_id = auth()->guard('visitor')->user()->id;
            $comment->title = $request->input('title');
            $comment->comment = $request->input('message');
            $comment->save();

            return response()->json(['message' => 'Successfully created comment!', 'status' => 200], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error', 'details' => $e->getMessage()], 500);
        }
    }
}
