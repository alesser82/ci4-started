<?php namespace App\Controllers;

class Coba extends BaseController
{
	public function index($param = null)
	{
		dd($param);
		// return view('welcome_message');
		echo "Parameter is $param";
	}

	//--------------------------------------------------------------------

}
