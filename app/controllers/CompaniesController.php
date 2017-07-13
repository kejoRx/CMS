<?php

namespace App\Controllers;
use App\core\App;
use App\models\sendCompaniesRequest;

class CompaniesController extends sendCompaniesRequest
{
public function indexCompany()
	{

		$companyDate = App::get('database')->selectAll('companies');
		//var_dump($contactDate);
		return view('companies', compact('companyDate'));

	}


	public function store(){

		$store = new sendCompaniesRequest();
		$store->sendInsert();
		
		return true;
	}

}