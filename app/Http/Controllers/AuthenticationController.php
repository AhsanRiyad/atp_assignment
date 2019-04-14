<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use Validator;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
    //

    public function login(){
		//return view('pages.login');
		//return view('samples/dashboard');

    	$products = DB::table('products')->get();

    	//$products = ['id'=>12];
    	//return $products;

		return view('user_defined.sell_product' )->withProducts($products);


	}

	

	public function loginCheck(Request $req){


		//$user = DB::table('users')->where('email', $req->email)->where('password', $req->password)->first();
		$user = DB::select('select * from users where email = (?) and password = (?)' , [$req->email , $req->password]);


		

		return $user;

		//return view('pages.login');
	}

	public function register(Request $req){

		return view('pages.register')->withMessage('');;
	}

	public function registerUser(Request $req){

		$messages = [
  	  	'email.required' => 'We need to know your e-mail address!',
		];

		$Validation = Validator::make($req->all(), ['email' => 'required|unique:users,email' , 'name'=> 'required' , 'password' => 'required'] , $messages);
	

		//$rules = 'required';

		$Validation->Validate();

		DB::table('users')->insert(
    	array('email' => $req->email, 'password' => $req->password , 'name' => $req->name )
		);



		return view('pages.register')->withMessage('Registration Successful');
	}
	
}
