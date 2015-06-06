<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MyGlobalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages/home');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function about() {
		return view('pages/about');
	}
}	
