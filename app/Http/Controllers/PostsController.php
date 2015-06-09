<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller {

	public function __construct(Post $post) {
		$this->post = $post;
	}

	public function index() {
		$posts = $this->post->orderBy('created_at', 'DESC')->paginate( 3 );
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

		$post = Post::create($request->all());
		return redirect()->back()->with( [ 'message' => 'Successfully created' ] );
	}

	public function profile() {
		return view('profile');
	}

}