<?php

namespace App\models;

use App\core\App;

class sendImagesRequest
{
	public $file, $submit;


	public function sendInsert($submit, $file) {
		$this->submit=$submit;
		$this->file=$file;

		
		$name = $file['name'];

		$path = "public/userfiles/" . basename($name);

		if(isset($submit)) {

			if (file_exists($path)) {
				echo $name . " already exists. ";
			} else {

				if(move_uploaded_file($file['tmp_name'], $path)) {
					App::get('database')->insert('images', [
						'file_name' => $name,
						'file_path' => $path,
						'sales_representative' => $_POST['role']
					]);
					return redirect('images');
				} 
			}
		}
	}
}
