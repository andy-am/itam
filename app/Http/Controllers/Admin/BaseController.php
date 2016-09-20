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

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('administration.index');
    }

    public function account()
    {
        return view('administration.account.index');
    }
}
