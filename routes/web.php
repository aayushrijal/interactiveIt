<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get(
    '/',
    [
        'as' => 'home',
        'uses' => 'Web\HomeController@index',
    ]
);

Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
        $message->subject('Mailgun and Laravel are awesome!');
		$message->from('no-reply@website_name.com', 'Website Name');
		$message->to('aayush.rijal@yipl.com.np');
	});
});
