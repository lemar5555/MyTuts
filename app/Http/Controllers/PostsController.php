<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Contracts\Auth\Guard;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller {

	public function __construct(Post $post, Guard $auth) {
		$this->middleware('auth');
		$this->post = $post;
		$this->auth = $auth;
	}

	public function index() {
		$posts = $this->post->orderBy('created_at', 'DESC')->paginate( 3 );
		return view('posts')->with('posts', $posts);
	}

	public function update( $id, PostUpdateRequest $request ) {
		// dd( $request->all() );
		// echo "string";
		// exit;
		// return response()->json( $request->all() );

		$data = $request->except('_method');
		
		if( $this->post->where('id', $id)->update($data) ) {
			return redirect()->action('PostsController@profile')->with( [ 'message' => 'Successfully Updated' ] );
		} else {
			return redirect()->back()->with( [ 'message' => 'Unable to update' ] );
		}
	}

	public function create() {
		return view('create_post');
	}

	public function delete($id) {

		$post = $this->post->findOrFail($id);
        if($post->delete()) { 
            return redirect()->back()->with( [ 'message' => 'Successfully deleted' ] );
        } else {
	        return redirect()->back()->with( [ 'message' => 'Unable to deleted' ] );        	
        }
        
	}

	public function show($id) {

		return view('show_exact_post', ['post' => $this->post->find($id)]);
	}

	public function edit($id) {
		return view('edit', ['post' => $this->post->find($id)]);
	}

	public function store( PostCreateRequest $request ) {
		$user_data = array_merge( $request->all(), [ 'user_id' => $this->auth->id() ] );
		$this->post->create( $user_data );
		return redirect()->back()->with( [ 'message' => 'Successfully created' ] );
	}

	public function profile() {

		$posts = $this->auth->user()->posts;
		$user = $this->auth->user();

		return view('profile', compact('posts', 'user') );
	}

}