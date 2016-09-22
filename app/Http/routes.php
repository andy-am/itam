<?php


Route::group(['middleware' => 'web'], function() {
    Route::post('contact/sendUsEmail', 'FrontendController@sendUsEmail');


    Route::get('/', 'HomepageController@index');

    Route::get('/contact', function(){
        return view('homepage.contact');
    });
    Route::get('/search', 'FrontendController@search');


    Route::resource('blog','BlogController');
    Route::controller('blog','BlogController');
    Route::get('/blog', 'BlogController@index');

    Route::resource('portfolio','PortfolioController');
    Route::controller('portfolio','PortfolioController');
    Route::get('/portfolio', 'PortfolioController@index');

    Route::get('user/login', 'UserController@login');
    Route::get('user/logout', 'UserController@doLogout');
    Route::post('user/doLogin', 'UserController@doLogin');


    Route::group(['middleware' => 'auth'], function () {
        ////////////////////////////// ADMIN ////////////////////////////////
        Route::group(['namespace' => 'Admin'], function () {

            ////////////////////////// BLOG //////////////////////////////

            Route::get('administration/blog/addNewBlog', 'BlogController@addNewBlog');
            Route::post('administration/blog/storeNewBlog', 'BlogController@storeNewBlog');
            Route::get('administration/blog/showAllBlogs', 'BlogController@showAllBlogs');
            Route::get('administration/blog/{id}', 'BlogController@showBlog');
            Route::put('administration/blog/{id}', 'BlogController@updateBlog');
            Route::delete('administration/blog/delete/{id}', 'BlogController@deleteBlog');

            Route::post('administration/blog/hide/{id}', 'BlogController@doHideBlog');
            Route::post('administration/blog/show/{id}', 'BlogController@doShowBlog');

            ////////////////////////// END BLOG //////////////////////////////


            ////////////////////////// NEWSLETTER //////////////////////////////

            Route::get('administration/newsletter/addNewNewsletter', 'NewsletterController@addNewNewsletter');
            Route::post('administration/newsletter/storeNewNewsletter', 'NewsletterController@storeNewNewsletter');
            Route::get('administration/newsletter/showAllNewsletters', 'NewsletterController@showAllNewsletters');
            Route::get('administration/newsletter/{id}', 'NewsletterController@showNewsletter');
            Route::post('administration/newsletter/{id}', 'NewsletterController@updateNewsletter');
            Route::delete('administration/newsletter/delete/{id}', 'NewsletterController@deleteNewsletter');

            //////////////////////// END NEWSLETTER /////////////////////////////


            ////////////////////////// QUOTATION //////////////////////////////

            Route::get('administration/quotation/addNewQuotation', 'QuotationController@addNewQuotation');
            Route::post('administration/quotation/storeNewQuotation', 'QuotationController@storeNewQuotation');
            Route::get('administration/quotation/showAllQuotation', 'QuotationController@showAllQuotation');
            Route::get('administration/quotation/{id}', 'QuotationController@showQuotation');
            Route::post('administration/quotation/{id}', 'QuotationController@updateQuotation');
            Route::delete('administration/quotation/delete/{id}', 'QuotationController@deleteQuotation');

            //////////////////////// END QUOTATION /////////////////////////////


            Route::get('administration/email/showEmails', 'EmailController@showEmails');

            Route::get('administration/account', 'BaseController@account');

            Route::get('administration', 'BaseController@index');
            Route::get('administration/visits', 'BaseController@visits');
            Route::get('administration/chart/getVisitsDaysLastMonth', 'BaseController@getVisitsDaysLastMonth');
            Route::get('administration/chart/getVisitsMonthsLastYear', 'BaseController@getVisitsMonthsLastYear');
            Route::get('administration/chart/getVisitsOfLastWeek', 'BaseController@getVisitsOfLastWeek');



            //Route::resource('administration', 'AdminController');
            //Route::controller('administration', 'AdminController');


        });
        ////////////////////////// END ADMIN ////////////////////////////
    });

});

