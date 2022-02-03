<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Route::get('/', 'HomeController@show');

Route::get('/home', 'HomeController@show');

Group::middleware('auth')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');

    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

// Properties
Route::get('/properties', 'PropertiesController@show');

Route::get('/property/{property_id}', 'PropertiesController@show');

//plans
Route::get('/plans', 'PlansController@show');

Route::get('/about_us', 'SettingsController@show');

Route::get('/contact_us', 'SettingsController@contact_us');

Group::middleware('guest')->members(function ()
{
    // sign Out
    Route::get('/logout', 'LogoutController@logout');

    Route::post('/logout', 'LogoutController@logout');

   // plans
    Route::get('/checkout/{plan_id}', 'SubscriptionController@checkout');

    Route::post('/subscribe', 'SubscriptionController@create');


    //profile
    Group::prefix('client')->middleware('admin')->members(function ()
    {
        Route::get('/profile/{id}', 'ProfileController@show');

        Route::post('/account', 'ProfileController@account');

        Route::post('/update', 'ProfileController@update');

        // Properties

        Route::get('/add_property', 'PropertiesController@addProperty');

        Route::post('/add_property', 'PropertiesController@create');

        Route::post('/properties', 'ProfileController@properties');

        Route::get('/properties_side', 'PropertiesController@properties_side');

        Route::get('/delete_property/{property_id}', 'PropertiesController@delete');

        Route::post('/send_msg', 'MessagesController@create');

    });

    Group::prefix('admin')->middleware('client')->members(function ()
    {
        Route::get('/messages', 'MessagesController@show');

        Route::view('/add_plan', 'admin/add_plan');

        Route::post('/add_plan', 'PlansController@create');

        Route::get('/delete_plan/{plan_id}', 'PlansController@delete');

        Route::get('/clients', 'ProfileController@show');

        Route::get('/delete_user/{id}', 'ProfileController@delete');

        Route::get('/properties', 'PropertiesController@show');

        Route::view('/add_agent', 'admin/add_agent');

        Route::post('/add_agent', 'AgentsController@create');

        Route::get('/agents', 'AgentsController@show');

        Route::get('/delete_agent/{agent_id}', 'AgentsController@delete');

        // Settings
        Route::post('/add_settings', 'SettingsController@update');

        Route::get('/settings', 'SettingsController@show');

        Route::post('/add_settings', 'SettingsController@update');

    });

});

Route::fallback(function (Response $response)
{
    return $response->withView('404');
});
