<?php

namespace App\Controllers;

use App\core\App;
use App\models\sendUserRequest;


class UsersController extends sendUserRequest
{

	public function indexUser()
	{
		$userDate = App::get('database')->selectAll('users');
		//var_dump($userDate);
		return view('users', compact('userDate'));

	}

	public function store(){
			$store = new sendUserRequest();
			$store->sendInsert();
			return true;
	}

}