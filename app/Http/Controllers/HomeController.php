<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    public function home(Request $request){
    	// if (Auth::check()){
    	// 	if (Auth::user->role == '2'){
    			return view('home_2');
    	// 	}
    	// }
    	// else {
    	// 	return view('auth.login');
    	// }
    }

}
