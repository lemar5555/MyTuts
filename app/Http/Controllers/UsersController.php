<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class UsersController extends Controller {

	public function __construct(User $user) {
		$this->user = $user;
	}

	public function index() {
		
	}

	public function loginPage()
	{
		return view('auth.login');
	}

	// Generate request for validation form
	public function authUser( Request $request) {

		$remember =  $request->get('remember') ? true : false;
		$auth =  Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember );
		if (Auth::viaRemember())
		{
			echo "logged in via remember !";
			exit;
		}

		if ($auth) {
			return redirect('/');
		} else {
			return redirect('/login')->with(['message' => 'Incorrect email or password. Try again...']);
		}
	}

	public function registrationPage() {
		return view('auth.register');
	}

	// Generate request for validation form
	public function storeUser( UserStoreRequest $request ) {

		$request['password'] = bcrypt($request->password);
		$user = $this->user->create( $request->all() );

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
		Auth::logout();
		return redirect('login');
	}

}
