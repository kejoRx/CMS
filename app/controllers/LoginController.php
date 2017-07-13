<?php 
namespace App\Controllers;

use App\models\LoginClass;

class LoginController extends LoginClass
{	
	public function log_in() {

		$log= new LoginClass();
		$log->login($_POST['submit'], $_POST['email_user'], sha1($_POST['password_user']));

		return true;
	}
}
