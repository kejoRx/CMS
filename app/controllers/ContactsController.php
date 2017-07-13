<?php

namespace App\Controllers;

use App\core\App;
use App\models\sendContactRequest;


class ContactsController extends sendContactRequest
{
	public function indexContact() {

			$contactDate = App::get('database')->selectAll('contacts');
			//var_dump($contactDate);
			return view('contacts', compact('contactDate'));
		}

	public function store() {
		$store = new sendContactRequest();
		$store->sendInsert();
		return true;
	}
}