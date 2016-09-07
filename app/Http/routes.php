<?php


Route::group(['middleware' => 'web'], function() {

    Route::get('/', 'HomepageController@index');

    Route::get('user/login', 'UserController@login');

    Route::resource('blog','BlogController');
    Route::controller('blog','BlogController');
    Route::get('/blog', 'BlogController@index');


    Route::resource('portfolio','PortfolioController');
    Route::controller('portfolio','PortfolioController');
    Route::get('/portfolio', 'PortfolioController@index');

    Route::get('/contact', function(){
        return view('homepage.contact');
    });

    Route::get('user/login', 'UserController@login');
    Route::get('user/logout', 'UserController@doLogout');
    Route::post('user/doLogin', 'UserController@doLogin');


    Route::group(['middleware' => 'auth'], function () {
        ////////////////////////////// ADMIN ////////////////////////////////
        Route::group(['namespace' => 'Admin'], function () {

            ////////////////////////// BLOG //////////////////////////////

            Route::get('administration/blog/addNewBlog', 'AdminController@addNewBlog');
            Route::post('administration/blog/storeNewBlog', 'AdminController@storeNewBlog');
            Route::get('administration/blog/showAllBlogs', 'AdminController@showAllBlogs');
            Route::get('administration/blog/{id}', 'AdminController@showBlog');
            Route::put('administration/blog/{id}', 'AdminController@updateBlog');
            Route::delete('administration/blog/delete/{id}', 'AdminController@deleteBlog');

            Route::post('administration/blog/hide/{id}', 'AdminController@doHideBlog');
            Route::post('administration/blog/show/{id}', 'AdminController@doShowBlog');

            ////////////////////////// END BLOG //////////////////////////////


            ////////////////////////// NEWSLETTER //////////////////////////////

            Route::get('administration/newsletter/addNewNewsletter', 'AdminController@addNewNewsletter');
            Route::post('administration/newsletter/storeNewNewsletter', 'AdminController@storeNewNewsletter');
            Route::get('administration/newsletter/showAllNewsletters', 'AdminController@showAllNewsletters');
            Route::get('administration/newsletter/{id}', 'AdminController@showNewsletter');
            Route::put('administration/newsletter/{id}', 'AdminController@updateNewsletter');
            Route::delete('administration/newsletter/delete/{id}', 'AdminController@deleteNewsletter');

            //////////////////////// END NEWSLETTER /////////////////////////////


            ////////////////////////// QUOTATION //////////////////////////////

            Route::get('administration/quotation/addNewQuotation', 'AdminController@addNewQuotation');
            Route::post('administration/quotation/storeNewQuotation', 'AdminController@storeNewQuotation');
            Route::get('administration/quotation/showAllQuotation', 'AdminController@showAllQuotation');
            Route::get('administration/quotation/{id}', 'AdminController@showQuotation');
            Route::put('administration/quotation/{id}', 'AdminController@updateQuotation');
            Route::delete('administration/quotation/delete/{id}', 'AdminController@deleteQuotation');

            //////////////////////// END QUOTATION /////////////////////////////


            Route::get('administration/email/showEmails', 'AdminController@showEmails');

            Route::get('administration/account', 'AdminController@account');

            Route::resource('administration', 'AdminController');
            Route::controller('administration', 'AdminController');


        });
        ////////////////////////// END ADMIN ////////////////////////////
    });

});

