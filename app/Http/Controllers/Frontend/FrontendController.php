<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class FrontendController extends Controller
{
    public function index()
    {
        $data['slides'] = News::with('category:category_name,id')->take(3)->skip(0)->orderBy('id', 'DESC')->get();
        $data['news'] = News::take(4)->skip(0)->get();
        return view('frontend.home',$data);
    }

    public function webCategory($cateId)
    {
        $data['news'] = News::with('author:name,id')->where('category_id', $cateId)->paginate(1);
        return view('frontend.category', $data);
    }
    public function newsDetails($newsId)
    {
        $data['news'] = News::with('author:name,id', 'category:category_name,id')->where('id', $newsId)->first();
        return view('frontend.news_details', $data);
    }


}
