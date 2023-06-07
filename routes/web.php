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
}) -> name('home');

Route::get('/exit', function () {
	return view('library');
}) -> name('exit');

/* AUTHORIZATION */

Route::get('/auth', function () {
	return view('authorization');
}) -> name('auth');

Route::post('/auth/submit', 'App\Http\Controllers\UsersController@auth') -> name('auth-form');

/* REGISTRATION */

Route::get('/reg', function () {
	return view('registration');
}) -> name('reg');

Route::post('/reg/submit', 'App\Http\Controllers\UsersController@reg') -> name('reg-form');

/* PROFILE */

Route::get('/profile', function () {
	return view('profile');
}) -> name('profile');

Route::post('/profile/comment', function () {
	
}) -> name('comment-form');

Route::get('/profile/edit-profile', function () {
	return view('profile');
}) -> name('edit-profile');

Route::get('/profile/my-comments', function () {
	return view('profile');
}) -> name('my-comments');

/* PEOPLE */

// Route::get('/people', function () {
// 	return view('people');
// }) -> name('people');

Route::get('/people', 'App\Http\Controllers\UsersController@out_users') -> name('people');

Route::get('/profile/id', function () {
	return view('profile');
}) -> name('people-profile');


/* LIBRARY */

Route::get('/book/id', function () {
	return view('library');
}) -> name('book-page');