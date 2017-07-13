<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();



		return $statement->fetchAll(PDO::FETCH_CLASS);


	}

	public function selectLogin($user_email, $user_pass) {
		// die(var_dump(array_keys($params)));
		$sql2 = 
			"SELECT * FROM users WHERE email= :email AND password= :password";
		try {
			$statement = $this->pdo->prepare($sql2);
			
			$statement-> execute(array('email'=>$user_email, 'password'=>$user_pass));
			// die(var_dump($statement));
			$rows = $statement->rowCount();

			return $rows; 
			
			
		} catch (Exception $e) {
			// die('Whoops, Something went wrong');
			die($e->getMessage());
		}
		
		
	}

	public function insert($table, $parameters){

		// die(var_dump(array_keys($parameters)));
		$sql = sprintf(
				'insert into %s (%s) values (%s)',
				$table,
				implode(', ' , array_keys($parameters)),
				':' . implode(' , :', array_keys($parameters))

			);
		// die(var_dump($sql));

		try {

			$statement = $this->pdo->prepare($sql);


			$statement -> execute($parameters);
			// die(var_dump($statement));
		} catch (Exception $e) {

			die($e->getMessage());
		}

		
	}
	
}