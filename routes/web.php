<?php

use App\Models\Comments;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
	return view('welcome');
}) -> name('home');

/* AUTHORIZATION */

Route::get('/auth', function () {
	return view('authorization');
}) -> name('auth');

Route::post(
	'/auth/submit',
	'App\Http\Controllers\UsersController@auth'
) -> name('auth_form');

Route::get(
	'/logout',
	'App\Http\Controllers\UsersController@logout'
) -> name('logout');

/* REGISTRATION */

Route::get('/reg', function () {
	return view('registration');
}) -> name('reg');

Route::post(
	'/reg/submit',
	'App\Http\Controllers\UsersController@reg'
) -> name('reg_form');

/* PROFILE */

// Route::get(
// 	'/profile/{id}',
// 	'App\Http\Controllers\UsersController@out_user'
// ) -> name('profile');
Route::middleware('CheckAuthMiddleware') -> group(function () {

	Route::get(
		'/profile/{id}',
		'App\Http\Controllers\UsersController@out_user'
	) -> name('profile');

	// Route::post('/profile/comment', function () {

	// }) -> name('comment_form');

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

	Route::post(
		'/profile/{id}',
		'App\Http\Controllers\UsersController@add_comment'
	) -> name('add_comment');
	
	Route::get(
		'/profile/{id}/{del}',
		'App\Http\Controllers\UsersController@delete_comment'
	) -> name('delete_comment');

	Route::get(
		'/my_comments/{id}',
		'App\Http\Controllers\UsersController@my_comments'
	) -> name('my_comments');

	
	/* LIBRARY */

	Route::get('/library', function () {
		return view('library');
	}) -> name('library');

	Route::get('/library/id', function () {
		return view('library');
	}) -> name('book_page');

});

/* PEOPLE */

Route::get(
	'/people',
	'App\Http\Controllers\UsersController@out_users'
) -> name('people');

Route::get(
	'/people/user/{id}',
	'App\Http\Controllers\UsersController@out_user'
) -> name('people_profile');
