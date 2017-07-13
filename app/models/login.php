<?php
namespace App\models;
use App\core\App;
use App\models\input_test;

class LoginClass
{


	public function login($submit, $email_user, $password_user){
		$this->submit=$submit;
		$this->email_user=$email_user;
		$this->password_user=$password_user;

			if(isset($submit)) {
				if(empty($email_user) || empty($password_user)) {
					return redirect('');
				} else {
					
					$stmt = App::get('database')->selectLogin(
						$email_user,
						$password_user
						);
				
					if ($stmt === 1) {
						$_SESSION['email_user'] = $email_user;
						return redirect('dashboard');

								
								
					} else {
						return redirect('');
					}
				}
			}
		}
	
}

