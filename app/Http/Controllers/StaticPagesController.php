<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller {

	public function index()
	{
		return view('layout');
	}

}
