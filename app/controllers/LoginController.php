<?php 
namespace App\Controllers;

use App\models\LogClass;

class LoginController extends LogClass
{	
	public function log_in() {

		$log= new LogClass();
		$log->login($_POST['submit'], $_POST['email_user'], sha1($_POST['password_user']));

		return true;
	}
}
