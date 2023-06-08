<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\AuthorizationRequest;
use App\Http\Requests\Edit_profileRequest;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
	public function reg(RegistrationRequest $req) {
		$user = new Users();
		$user -> surname = $req -> input('surname');
		$user -> name = $req -> input('name');
		$user -> l_name = $req -> input('l_name');
		$user -> email = $req -> input('email');
		$user -> password = $req -> input('password');
		$user -> avatar = $req -> file('avatar');

		$user -> password = Hash::make($user -> password, ['rounds' => 12]);

		$user -> save();

		return redirect() -> route('home') -> with('success', 'Registered');
		// return redirect() -> route('reg') -> with('success', 'Registered');
	}

	public function auth(AuthorizationRequest $req) {
		$user = new Users();
		$user -> email = $req -> input('email');
		$user -> password = $req -> input('password');

		// Auth::user();
	}

	public function out_users() {
		// $user = new Users;
		// $user -> all();
		return view('people', ['data' => Users::all()]);
	}

	public function out_user($id) {
		// $user = new Users;
		// $user -> all();
		return view('profile', ['data' => Users::find($id)]);
	}

	public function edit_profile($id) {
		return view('edit_profile', ['data' => Users::find($id)]);
	}

	public function edit_form($id, Edit_profileRequest $req) {
		$user = Users::find($id);
		$user -> surname = $req -> input('surname');
		$user -> name = $req -> input('name');
		$user -> l_name = $req -> input('l_name');
		$user -> email = $req -> input('email');
		$user -> password = $req -> input('password');
		$user -> avatar = $req -> file('avatar');

		dd($user->avatar);
		// $user->save();

		// return redirect()->route('people_profile', $id)->with('success', 'Edited');
	}
	
	public function delete_user($id) {
		Users::find($id) -> delete();
		
		return redirect() -> route('home') -> with('success', 'Deleted');
	}

}
