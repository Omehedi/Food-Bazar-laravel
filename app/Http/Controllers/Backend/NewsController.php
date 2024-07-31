<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::join('users', 'news.created_by', '=', 'users.id')->select('news.*','users.name as user_name')->get();
        return view('backend.news.newsList', $data);
    }

    public function create()
    {
        $data['categories'] = Category::get();
        return view('backend.news.newsCreate', $data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'details' => 'required',
            'thumbnail'=> 'required',
        ]);

        $imageName = '';
        if ($image = $request->file('thumbnail')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(storage_path('uploads'), $imageName);
        }

        $input = $request->except('_token');

        $news = new News();
        $news->fill($input);
        $news->date = date('Y-m-d');
        $news->created_by = auth()->user()->id;
        $news->thumbnail = $imageName;
        $news->save();


        Session::flash('success', 'Successfully Inserted');

        return redirect()->back();
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all();
        return view('backend.news.newsEdit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'details' => 'required',
        ]);

        $news = News::findOrFail($id);
        $input = $request->except('_token');

        if ($news) {
            $imageName = $news->thumbnail; // Default to the existing image

            if ($image = $request->file('thumbnail')) {
                // Store new image
                $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(storage_path('uploads'), $imageName);

                // Optionally, delete the old image if desired
                // if (file_exists(storage_path('uploads') . '/' . $news->thumbnail)) {
                //     unlink(storage_path('uploads') . '/' . $news->thumbnail);
                // }
            }

            $news->fill($input);
            $news->thumbnail = $imageName;
            $news->save();

            Session::flash('success', 'News successfully updated.');
            return redirect()->route('news.index');
        }

        Session::flash('error', 'News not updated.');
        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $news = News::findOrFail($id);
            $news->delete();

            Session::flash('success', 'Successfully Deleted');
            return redirect()->route('news.index');
        }
    }


    public function card()
    {
        return view('backend.news.newsCreate');

    }




}




