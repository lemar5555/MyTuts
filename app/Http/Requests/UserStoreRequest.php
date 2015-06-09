<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserStoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
<<<<<<< HEAD
		'username' => 'required|alpha_num',
		'email' =>	'required|email',
		'password' => 'required|min:8',
=======
			'username' => 'required|alpha_num|min:3|max:32',
			'email'    => 'required|email|unique:users',
			'password' => 'required|min:6|confirmed',
			'password_confirmation' => 'required',

>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
		];
	}

}
