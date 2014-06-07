<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('users/new', function()
{
    return View::make('usernew');
});

Route::post('users/new', function()
{
    $name = Input::get('name');
    $email = Input::get('email');
    
    DB::table('users')->insert(
        array(
            'name' => $name,
            'email' => $email
        )
    );
    
    return Redirect::to('users');
});


