<?php

namespace App\models;

use App\core\App;

class sendCompaniesRequest
{

	public function sendInsert(){
		App::get('database')->insert('companies', [
			'name'  => $_POST['name'],
			'street'  => $_POST['street'],
			'postcode'  => $_POST['postcode'],
			'city'  => $_POST['city'],
			'country'  => $_POST['country'],
			'nip'  => $_POST['NIP'],
			'phone'  => $_POST['phone'],
			'email'  => $_POST['email']
			]);

			return redirect('companies');
	}
}