<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		echo view('templates/header');
        echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
