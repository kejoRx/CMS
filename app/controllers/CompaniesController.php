<?php

namespace App\Controllers;
use App\core\App;


class CompaniesController
{
public function indexCompany()
	{

		$companyDate = App::get('database')->selectAll('companies');
		//var_dump($contactDate);
		return view('companies', compact('companyDate'));

	}


	public function store(){

		// $app['database']->insert('users', [
		App::get('database')->insert('company', [
		'name'  => mysql_real_escape_string($_POST['name']),
		'street'  => mysql_real_escape_string($_POST['street']),
		'postcode'  => mysql_real_escape_string($_POST['postcode']),
		'city'  => mysql_real_escape_string($_POST['city']),
		'country'  => mysql_real_escape_string($_POST['country']),
		'nip'  => mysql_real_escape_string($_POST['NIP']),
		'phone'  => mysql_real_escape_string($_POST['phone']),
		'email'  => mysql_real_escape_string($_POST['email'])
		]);

		return redirect('companies');

		

	}

}