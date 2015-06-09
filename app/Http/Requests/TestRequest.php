<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TestRequest extends Request {

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
			'username' => 'required',
			'password' => 'required|min:8',
			'email' => 'required|email|unique:users',
=======
			//
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
		];
	}

}
