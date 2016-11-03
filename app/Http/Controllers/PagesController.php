<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//

	public function __construct()
	{
		$this->middleware('guest');
	}




	public function postTest(Request $request)
	{

		return redirect('/test')
			   ->withInput($request->only('search'));


	}
	public function getTest()
	{

		return view('pages/test');

	}

	public function index()
	{
		return view('pages/index');
	}
	


}
