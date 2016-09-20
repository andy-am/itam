<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Newsletter;
use App\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Image;

class BlogController extends Controller
{


    public function doShowBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->active = 1;
        if($blog->save()){
            return response()->json(['error' => false, 'message' => 'Blog active has been changed on show. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Blog active has not been changed']);
        }

    }

    public function doHideBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->active = 0;
        if($blog->save()){
            return response()->json(['error' => false, 'message'=>'Blog active has been changed on hide.' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Blog active has not been changed']);
        }
    }


    public function addNewBlog()
    {
        return view('administration.blog.addNewBlog');
    }

    public function storeNewBlog(Request $request)
    {
        $blog = new Blog();
        $id = $blog->create($request->all())->id;
        if($request->hasFile('img')){

            $extension = $request->file('img')->getClientOriginalExtension();
            $days = date("Ymd");
            $secs = date("His", strtotime('+1 hour'));
            $imgName = "blog_id_".$id."_".$days."_".$secs.".".$extension;
            $path = public_path() . '/upload/blogs';
            $image = $request->file('img');
            $request->file('img')->move( $path, $imgName);
            $image = Blog::find($id);
            $image->img = $imgName;
            $image->save();
        }

        return redirect('/administration/blog/showAllBlogs');

    }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update( $request->all() );
        return redirect('/administration/blog/showAllBlogs');
    }

    public function showAllBlogs()
    {
        return view('administration.blog.showAllBlogs');
    }

    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('administration.blog.showBlog')->with('blog', $blog);
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return $id;
        //return view('administration.blog.showBlog')->with('blog', $blog);
    }
}
