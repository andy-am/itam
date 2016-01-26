<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Tests\Session\Flash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administration.blog.index');
    }

    public function addNewBlog()
    {
        return "to do";
    }

    public function storeBlog(Request $request, $id)
    {

        return dd($request->all());
    }

    public function updateBlog(Request $request, $id)
    {
        //return dd($request->all());
        $blog = Blog::findOrFail($id);

        $blog->update( $request->all() );

        $blog->session()->flash('alert-success', 'User was successful added!');
        return redirect('/administration/blog/showAllBlogs');
    }

    public function deleteBlog(Request $request, $id)
    {
        return $request;
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



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
