<?php
use App\core\App;

App::get('database')->insert('users', [
		'group_name' => test_input($_POST['role']),
		'name'  => test_input($_POST['name']),
		'surname'  => test_input($_POST['surname']),
		'position'  => test_input($_POST['position']),
		'phone'  => test_input($_POST['phone']),
		'email'  => test_input($_POST['email']),
		'password'  => test_input(sha1($_POST['password'])),
		//'password_confirmation'  => $_POST['password_confirmation']
		'API'  => test_input($_POST['api_token'])
		]);

		return redirect('users');