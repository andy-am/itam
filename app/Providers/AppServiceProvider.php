<?php

namespace App\Providers;

use App\Blog;
use App\Newsletter;
use App\Quotation;
use App\Visit;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$v = Visit::all();

        /*$A_blogs = Blog::all();
        view()->share('A_blogs', $A_blogs);

        $A_newsletters = Newsletter::all();
        view()->share('A_newsletters', $A_newsletters);

        $A_quotations = Quotation::all();
        view()->share('A_quotations', $A_quotations);*/

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
