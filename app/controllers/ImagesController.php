<?php

namespace App\Controllers;

use App\core\App;

class ImagesController
{

	public function indexImage()
	{
		$imageDate = App::get('database')->selectAll('images');
		//var_dump($userDate);
		return view('images', compact('imageDate'));
		var_dump($imageDate);
	}

	public function store(){

		// $app['database']->insert('users', [
		App::get('database')->insert('users', [
		'name' => $_POST['name']

		]);

		return redirect('users');

		

	}

}