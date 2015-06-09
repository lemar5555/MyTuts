<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;

use App\User;

class UsersController extends Controller {

	public function __construct() {

	}

	public function index() {
		
	}

	public function loginPage()
	{
		return view('auth.login');
	}

	// Generate request for validation form
	public function authUser( ) {

	}

	public function registrationPage() {
		return view('auth.register');
	}

	// Generate request for validation form
	public function storeUser(UserStoreRequest $request) {

		User::create(['username' => $request->username, 'email' => $request->email, 'password' => $request->password]);

		return redirect(action('PostsController@profile'));
	}

}
