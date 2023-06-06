<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('library');
});

Route::get('/auth', function () {
	return view('authorization');
});

Route::get('/reg', function () {
	return view('registration');
});

Route::get('/profile', function () {
	return view('profile');
});

Route::get('/people', function () {
	return view('people');
});