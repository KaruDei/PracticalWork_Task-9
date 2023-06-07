<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\AuthorizationRequest;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
	public function reg(RegistrationRequest $req) {
		$user = new Users();
		$user->surname = $req->input('surname');
		$user->name = $req->input('name');
		$user->l_name = $req->input('l_name');
		$user->email = $req->input('email');
		$user->password = $req->input('password');
		$user->avatar = $req->input('avatar');

		$user->save();

		return redirect()->route('reg')->with('success', 'Registered');
	}

	public function auth(AuthorizationRequest $req) {
		$user = new Users();
		$user->email = $req->input('email');
		$user->password = $req->input('password');
	}

	public function out_users() {
		// $user = new Users;
		// $user -> all();
		return view('people', ['data' => Users::all()]);
	}
}
