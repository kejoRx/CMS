<?php

namespace App\Controllers;
use App\core\App;


class UsersController
{

	public function indexUser()
	{
		$userDate = App::get('database')->selectAll('users');
		//var_dump($userDate);
		return view('users', compact('userDate'));

	}

	public function store(){
		return model('userCreate');
	}

}