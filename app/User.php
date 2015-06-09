<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $fillable = array( 'username', 'email', 'password' );

	public static function insert() {

<<<<<<< HEAD
	}
=======
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7

}

