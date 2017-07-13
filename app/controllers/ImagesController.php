<?php

namespace App\Controllers;

use App\core\App;
use App\models\sendImagesRequest;

class ImagesController extends sendImagesRequest
{

	public function indexImage()
	{
		$imageDate = App::get('database')->selectAll('images');
		//var_dump($userDate);
		return view('images', compact('imageDate'));
		// var_dump($imageDate);
	}

	public function store(){
		$store= new sendImagesRequest();
		$store->sendInsert($_POST['submit'], $_FILES['file']);
		return true;
	}

}