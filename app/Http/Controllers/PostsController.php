<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;

use App\Models\Post;

class PostsController extends Controller {

	public function __construct(Post $post) {
		$this->post = $post;
	}

	public function index() {
		$posts = Post::all();

		return view('posts')->with('posts', $posts);
	}

	public function update($id) {
		return "update bla";
	}

	public function create() {
		return view('create_post');
	}

	public function delete($id) {
		return "delete bla";
	}

	public function show($id) {

		return view('show', ['post' => $this->post->find($id)]);
	}

	public function edit($id) {
		return view('edit');
	}

	public function store( PostCreateRequest $request ) {
		$postTitle = $request->get('post_title');
		$postBody = $request->get('post_body');

		// var_dump( $request->all() );
		// echo "<br><hr>";
		echo $postTitle;
		echo $postBody;


	}

	public function profile() {
		return view('profile');
	}

}