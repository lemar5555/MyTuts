<?php namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;

use App\User;
=======
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7

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
<<<<<<< HEAD
	public function authUser( ) {

=======
	public function authUser( Request $request) {
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
		{
			return redirect('/')->with( [ 'message' => 'Successfully created' ] );
		}
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
	}

	public function registrationPage() {
		return view('auth.register');
	}

	// Generate request for validation form
<<<<<<< HEAD
	public function storeUser(UserStoreRequest $request) {

		User::create(['username' => $request->username, 'email' => $request->email, 'password' => $request->password]);

		return redirect(action('PostsController@profile'));
=======
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
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
	}

}
