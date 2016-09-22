<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Newsletter;
use App\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Image;
use App\Visit;
use DB;
use Carbon\Carbon;;

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

    public function visits()
    {
        return view('administration.base.visits');
    }
    public function getVisitsDaysLastMonth()
    {
        $visits = Visit::select(DB::raw("DATE_FORMAT(created_at, '%d.%m.%Y') as day"), DB::raw('count(*) as value'))
            ->whereYear('created_at', '=', date("Y"))
            ->whereMonth('created_at', '=', date("n"))
            ->groupBy(DB::raw("DAY(created_at), MONTH(created_at)"))
            ->get()
            ->toArray();
        //var_dump($visits);die();
        return Response::json($visits);
    }

    public function getVisitsMonthsLastYear()
    {
        $visits = Visit::select(DB::raw("DATE_FORMAT(created_at, '%m') as month"), DB::raw('count(*) as value'))
            ->whereYear('created_at', '=', date("Y"))
            ->groupBy(DB::raw("MONTH(created_at)"))
            ->get()
            ->toArray();
        return Response::json($visits);
    }

    public function getVisitsOfLastWeek()
    {
        $visits = Visit::select(DB::raw("DATE_FORMAT(created_at, '%w') as week"), DB::raw('count(*) as value'))
            ->whereBetween('created_at', [
                Carbon::parse('last monday')->startOfDay(),
                Carbon::parse('next sunday')->endOfDay(),
            ])
            ->groupBy(DB::raw("DAYOFWEEK((created_at))"))
            ->get()
            ->toArray();
        //dd($visits);
        return Response::json($visits);
    }

}
