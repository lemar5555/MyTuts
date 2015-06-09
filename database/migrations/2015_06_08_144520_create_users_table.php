<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('email');
<<<<<<< HEAD:database/migrations/2015_06_08_144520_create_users_table.php
=======
			$table->rememberToken();
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7:database/migrations/2015_06_08_144520_create_users_table.php
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
