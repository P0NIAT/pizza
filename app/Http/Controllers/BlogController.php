<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function Index()
    {
        $blogs = Blog::all();
        return view('blog.blog_index', compact('blogs'));
    }
    public function Showall()
    {
        $blogs = Blog::all();
        return view('frontend.blog', compact('blogs'));
    }

    public function Create()
    {
        return view('blog.blog_create');
    }

    public function Show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.blog_show', compact('blog'));
    }


    public function Store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'intro' => 'required',
            'content' => 'required',
            'photo' => 'required',
        ]);

        $blog = new Blog();
        $blog->author = $request->author;
        $blog->title = $request->title;
        $blog->intro = $request->intro;
        $blog->content = $request->content;

        $file = $request->file('photo');
        if ($file) {
            @unlink(public_path('upload/blog_images/' . $blog->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $blog->photo = $filename;
        }

        $blog->save();

        $notification = array(
            'message' => 'Blog Post Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.index')->with($notification);
    }

    public function Edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.blog_edit', compact('blog'));
    }

    public function Update(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'content' => 'required',
            'intro' => 'required',
        ]);

        $bid = $request->id;

        $blog = Blog::findOrFail($bid);
        $blog->author = $request->author;
        $blog->title = $request->title;
        $blog->intro = $request->intro;
        $blog->content = $request->content;

        $file = $request->file('photo');
        if ($file) {
            @unlink(public_path('upload/blog_images/' . $blog->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $blog->photo = $filename;
        }

        $blog->save();

        $notification = array(
            'message' => 'Blog Post Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.index')->with($notification);
    }

    public function Destroy($id)
    {
        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Post Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
