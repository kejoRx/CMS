<?php
namespace App\models;
class LogoutClass
{
	public function logout() {
		session_destroy();
		unset($_SESSION['email_user']);
		return redirect('');
	}
}
