<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

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
        return view('administration.blog.addNewBlog');
    }

    public function storeNewBlog(Request $request)
    {
        $blog = new Blog();
        $blog->create($request->all());
        return redirect('/administration/blog/showAllBlogs');

    }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update( $request->all() );
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

    public function showEmails(){

        

        $mailbox = "{mail.gmail.com:143/notls}INBOX";
        $user = "a.majik7@gmail.com";
        $pass = "77andy77";

        $connection = imap_open($mailbox,$user,$pass) or die(imap_last_error()."<br>Connection Faliure!");

        return $connection;
        return view('administration.email.showEmails')->with('output', $emails);
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
