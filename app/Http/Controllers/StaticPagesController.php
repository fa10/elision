<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller {

	public function blog()
	{
		return view('layout');
	}

	public function devfam()
	{
		return view('home');
	}

}
