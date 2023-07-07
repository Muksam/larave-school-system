<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.pages.blog.show-blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.blog.add-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'title'=>'required',
            'details'=>'required',
            'date'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $blog = new Blog;
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/blog/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $blog['image'] = $profileImage;
        }

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->details = $request->details;
        $blog->date = $request->date;
        $blog->save();
        
        return redirect()->route('blogs.index')->with('success','you have sucessfully store blog');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit(Blog $blog)
    {
        return view('dashboard.pages.blog.edit-blog',compact('blog'));
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
        $request ->validate([
            'title'=>'required',
            'details'=>'required',
            'date'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $blog = Blog::find($id);
        if ($blog) {
            if ($image = $request->file('image')) {
                $destinationPath = public_path('dashboard/blog/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $blog['image'] = $profileImage;
            } else {
                unset($blog['image']);
            }


            $blog->title = $request->title;
            $blog->details = $request->details;
            $blog->date = $request->date;
            $blog->slug = Str::slug($request->title);
            $blog->update();
            return redirect()->route('blogs.index')->with('success','you have sucessfully updated blog');
        } else{
            return redirect()->route('blogs.index')->with('success','you have not found your blog');   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $blog->delete();
            return redirect()->route('blogs.index')->with('success','you have sucessfully deleted blog');
        } else {
            return redirect()->route('blogs.index')->with('success','you have not found your blog');
        }
    }
}
