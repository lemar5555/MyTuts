<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\User;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('UsersSeeder');
		$this->call('PostsSeeder');
	}

}

class PostsSeeder extends Seeder {
	public function run() {
		DB::table('posts')->delete();

		Post::create([
			'title'			=>	'My First Post',
			'body'			=>	'My Post booooooody',
			'user_id'		=>	'1',
			'category_id'	=>	'some category',
		]);

		Post::Create([
			'title'			=>	'My Second Post',
			'body'			=>	'My Post is the best !',
			'user_id'		=>	'2',
			'category_id'	=>	'some category',
		]);
	}


}

class UsersSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		User::create([
			'username'		=>	'Levon',
			'password'		=>	bcrypt('lev123'),
			'email'			=>	'lev@lev.lev',
		]);

		User::create([
			'username'		=>	'James',
			'password'		=>	bcrypt('james123'),
			'email'			=>	'james@james.james',
		]);
	}
}