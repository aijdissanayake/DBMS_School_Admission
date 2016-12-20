<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use View;
use Hash;
use Redirect;
use Auth;

class UserController extends Controller
{

	public function viewUsers(Request $request){
		$users = User::all();

		return View::make('user/view')->with('users',$users);
	}

	public function addUser(Request $request){
		$this->validate($request, [
			'username' => 'required|min:3|unique:user,username',
			'password' => 'required|confirmed|min:3',
			'role' => 'required'
			]);

		$user = new User();
		$user->name = $request['name'];
		$user->username = $request['username'];
		$user->password = bcrypt($request['password']);
		$user->role = $request['role'];

		if($user->save()){
			return Redirect::route('user.view');
		}else{
			return Redirect::route('user.view')->withErrors(['msg'=>'Error creating user']);
		}
	}

	public function login(Request $request){
		// return view('home_2');

		$un = $request['username'];
		$pw = $request['password'];


		$user = User::authenticate($request['username']);

		// dd($user);

		if($user){
			if (Hash::check($pw,$user->password)) {

				Auth::login($user);
				return redirect()->route('home');
			}else{
				return Redirect::route('login')->withErrors(['msg'=>'Invalid username or password!']);
			}

		}
	}

	public function logout(Request $request){
		Auth::logout();
		return Redirect::route('home');
	}

	public function home(Request $request){
		if (Auth::check()){
			if (Auth::user()->role == '2'){
		return view('home_2');
			}
		}
		else {
			return view('auth.login');
		}
	}

}
