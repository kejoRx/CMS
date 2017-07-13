<?php
namespace App\models;

use App\core\App;

class sendContactRequest
{
	public function sendInsert() {
		App::get('database')->insert('contacts', [
			'company_name'  => $_POST['company'],
			'name_and_surname'  => $_POST['nameSurname'],
			'phone'  => $_POST['phone'],
			'email'  => $_POST['email'],
			'sales_representative'  => $_POST['sales_representative']
			]);

			return redirect('contacts');
	}
}