<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\AuthorizationRequest;
use App\Http\Requests\Edit_profileRequest;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
	public function reg(RegistrationRequest $req) {
		$user = new User();
		$user -> surname = $req -> input('surname');
		$user -> name = $req -> input('name');
		$user -> l_name = $req -> input('l_name');
		$user -> email = $req -> input('email');
		$user -> password = $req -> input('password');
		$user -> avatar = $req -> file('avatar');

		// $user -> password = Hash::make($user -> password, ['rounds' => 12]);

		$user -> save();

		return redirect() -> route('home') -> with('success', 'Registered');
		// return redirect() -> route('reg') -> with('success', 'Registered');
	}

	public function auth(AuthorizationRequest $req) {
		$credentials = $req->only('email', 'password');

		if (Auth::attempt($credentials)) {
			return redirect()->intended( route('home') );
		} else {
			return back() -> withErrors(['email' => 'Неверные учётные данные']);
		}
	}

	public function logout () {
		Auth::logout();
		return redirect( route('home') );
	}

	public function out_users() {
		// $user = new Users;
		// $user -> all();
		return view('people', ['data' => User::all()]);
	}

	public function out_user($id) {
		// $user = new Users;
		// $user -> all();
		return view('profile', ['data' => User::find($id), 'comments' => Comments::all()->where('profile_id', '==', $id)->take(5)]);
	}

	public function edit_profile($id) {
		return view('edit_profile', ['data' => User::find($id)]);
	}

	public function edit_form($id, Edit_profileRequest $req) {
		$user = User::find($id);
		$user -> surname = $req -> input('surname');
		$user -> name = $req -> input('name');
		$user -> l_name = $req -> input('l_name');
		$user -> email = $req -> input('email');
		$user -> password = $req -> input('password');
		$user -> avatar = $req -> file('avatar');

		// dd($user->avatar);
		$user->save();

		return redirect()->route('people_profile', $id)->with('success', 'Edited');
	}
	
	public function delete_user($id) {
		User::find($id) -> delete();
		
		return redirect() -> route('home') -> with('success', 'Deleted');
	}

	public function add_comment($id, ) {
		
		// return redirect() -> route('home');
	}

	public function delete_comment() {
		
	}

}
