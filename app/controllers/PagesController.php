<?php

namespace App\Controllers;

use App\models\LogClass;

class PagesController extends LogClass
{
	public function home(){

		return view('index_log');

	}
	public function dashboard(){
		return view('dashboard');
	}
	
	public function logout(){
		$log = new LogClass();
		$log->logout();
		return true;
	}
	
	
	public function users(){

		return view('users');

	}
	public function addUsers(){

		return viewTemplates('addUsers');

	}

	public function companies(){

		return view('companies');

	}
	public function addCompany(){

		return viewTemplates('addCompany');

	}



	public function images(){

		return view('images');

	}
	public function addImages(){

		return viewTemplates('addImages');

	}
	public function contacts(){

		return view('contacts');

	}
	public function addContact(){

		return viewTemplates('addContact');
	}

	

}