<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $A_blogs = Blog::all();
        view()->share('A_blogs', $A_blogs);

        $A_newsletters = Newsletter::all();
        view()->share('A_newsletters', $A_newsletters);

        $A_quotations = Quotation::all();
        view()->share('A_quotations', $A_quotations);
    }
}
