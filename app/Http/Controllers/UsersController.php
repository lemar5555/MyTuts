<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

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
	public function authUser( Request $request) {
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
		{
			return redirect('/')->with( [ 'message' => 'Successfully created' ] );
		}
	}

	public function registrationPage() {
		return view('auth.register');
	}

	// Generate request for validation form
	public function storeUser( UserStoreRequest $request ) {

		$request['password'] = bcrypt($request->password);
		$user = User::create( $request->all() );

		Auth::login( $user ) ;
		
		if ( Auth::check() )
		{
			return redirect('/')->with( [ 'message' => 'Successfully created' ] );
		}else{
			echo 'false';
		}
	}

	public function logout()
	{
		return Auth::logout();
	}

}
