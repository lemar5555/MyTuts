<?php namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;

=======
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;

use Illuminate\Http\Request;
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
use App\Models\Post;

class PostsController extends Controller {

	public function __construct(Post $post) {
		$this->post = $post;
	}

	public function index() {
<<<<<<< HEAD
		$posts = Post::all();

=======
		$posts = $this->post->orderBy('created_at', 'DESC')->paginate( 3 );
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
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
<<<<<<< HEAD
		$postTitle = $request->get('post_title');
		$postBody = $request->get('post_body');

		// var_dump( $request->all() );
		// echo "<br><hr>";
		echo $postTitle;
		echo $postBody;


=======

		$post = Post::create($request->all());
		return redirect()->back()->with( [ 'message' => 'Successfully created' ] );
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
	}

	public function profile() {
		return view('profile');
	}

}