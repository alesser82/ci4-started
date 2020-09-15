<?php namespace App\Controllers;

class About extends BaseController
{
	const VIEW_PATH = 'pages/about/';

	public function index()
	{
		$data['pageTitle'] = 'About';
		return view(self::VIEW_PATH . 'index', $data);
	}

	//--------------------------------------------------------------------

}
