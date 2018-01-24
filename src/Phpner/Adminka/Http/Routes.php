<?php

/**
 * Routes for Login to admin panel
 */
Route::group(['middleware'=> 'web'],function ()
{
    /**
     * show login form
     */
Route::get('login',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\LoginController@showLoginForm",
    "as" => "login"
]);

    /**
     * Make Login to admin panel
     */

Route::post('login',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\LoginController@login",
    "as" => "login"
]);

    /**
     * Snow registration form
     */

Route::get('/register',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\RegisterController@showRegistrationForm",
    "as" => "register"
]);

    /**
     * Register a new user
     */
Route::post('/register',[
    "uses" => "Phpner\Adminka\Http\Controllers\Auth\RegisterController@register",
    "as" => "register"
]);

Route::post('/logout',function (){

        Auth::logout(); return redirect('login');

    });

    Route::get("admin",[
        'uses' => "Phpner\Adminka\Http\Controllers\AdminkaController@index"
    ]);



});


/**
 * Routes admin panel
 */
Route::group(['middleware'=> ['auth','web']],function ()
{
    /**
     * Main admin panel
     */


});