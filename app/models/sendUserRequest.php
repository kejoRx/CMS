<?php

namespace App\models;

use App\core\App;



class sendUserRequest
{
	public function sendInsert() {
		App::get('database')->insert('users', [
			'group_name' => $_POST['role'],
			'name'  => $_POST['name'],
			'surname'  => $_POST['surname'],
			'position'  => $_POST['position'],
			'phone'  => $_POST['phone'],
			'email'  => $_POST['email'],
			'password'  => sha1($_POST['password']),
			//'password_confirmation'  => $_POST['password_confirmation']
			'API'  => $_POST['api_token']
			]);
			return redirect('users');	
	}
	
}
