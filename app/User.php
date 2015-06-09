<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $fillable = array( 'username', 'email', 'password' );

	public static function insert() {

	}

}
