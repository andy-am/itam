<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Visit;
use App\Quotation;
use Illuminate\Pagination\Paginator;

class HomepageController extends Controller
{

    public function roulette($countOfNums){

        //return         // Quotation::findOrFail([])

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = @unserialize(file_get_contents('http://ip-api.com/php/'));
        $visit = new Visit;
        $visit->browser = $request->server('HTTP_USER_AGENT');
        $visit->city = $data['city'];
        $visit->country = $data['country'];
        $visit->country_code = $data['countryCode'];
        $visit->continent = "CONTINENT";
        $visit->continent_code = "CONTINENT_CODE";
        $visit->save();

        return view('homepage.index');// ->with("quotations", $quotations);

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
        $blog = Blog::findOrFail($id);


        return view('blog.show')->with('blog',$blog);
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
