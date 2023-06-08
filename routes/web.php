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

Route::post('/auth/submit',
	'App\Http\Controllers\UsersController@auth'
) -> name('auth_form');

/* REGISTRATION */

Route::get('/reg', function () {
	return view('registration');
}) -> name('reg');

Route::post('/reg/submit',
	'App\Http\Controllers\UsersController@reg'
) -> name('reg_form');

/* PROFILE */

Route::get(
	'/profile/id/{',
	'App\Http\Controllers\UsersController@out_user'
) -> name('profile');

Route::post('/profile/comment', function () {
	
}) -> name('comment_form');

Route::get(
	'/profile/{id}/edit',
	'App\Http\Controllers\UsersController@edit_profile'
) -> name('edit_profile');

Route::post(
	'/profile/{id}/edit',
	'App\Http\Controllers\UsersController@edit_form'
) -> name('edit_form');

Route::get(
	'/profile/{id}/delete',
	'App\Http\Controllers\UsersController@delete_user'
) -> name('delete_user');

Route::get('/profile/my-comments', function () {
	return view('profile');
}) -> name('my_comments');

/* PEOPLE */

Route::get('/people',
	'App\Http\Controllers\UsersController@out_users'
) -> name('people');

Route::get('/profile/id/{id}',
	'App\Http\Controllers\UsersController@out_user'
) -> name('people_profile');


/* LIBRARY */

Route::get('/book/id', function () {
	return view('library');
}) -> name('book_page');