<?php

namespace App\Controllers;
use App\core\App;


class ContactsController
{
public function indexContact()
	{

		$contactDate = App::get('database')->selectAll('contacts');
		//var_dump($contactDate);
		return view('contacts', compact('contactDate'));

	}
}