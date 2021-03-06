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

Route::get('/', function () {
    return view('spectral');
});

Route::get('/elements', function () {
    return view('elements');
});


Route::get('/generic', function () {
    return view('generic');
});

Route::get('/reports', function () {
	
	$subscriptions = DB::table('subscriptions')->get();
	
	return view('reports')->with(compact('subscriptions'));
});