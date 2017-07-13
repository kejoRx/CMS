<?php

namespace App\Controllers;

use App\core\App;

class ImagesController
{

	public function index()
	{
		$users= App::get('database')->selectAll('users');
		return view('users', ['users' => $users]);

	}

	public function store(){

		// $app['database']->insert('users', [
		App::get('database')->insert('users', [
		'name' => $_POST['name']

		]);

		return redirect('users');

		

	}

}