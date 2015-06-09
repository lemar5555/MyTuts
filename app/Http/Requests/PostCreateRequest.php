<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

<<<<<<< HEAD
=======

>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
class PostCreateRequest extends Request {

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
			'post_title' => "required|alpha_num",
			'post_body' => "required|alpha_num"
=======
			'title' => "required",
			'body' => "required"
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
		];
	}

}
