<?php

namespace App;

class Connection{

	//static para que a gente não precise criar uma instância de Connection para utilizar o método getDb
	public static function getDb() {

		try{

			$conn = new \PDO(
				"mysql:host=localhost;dbname=bd;charset=utf8",
				"root",
				""

			);

			return $conn;

		}catch (\PDOException $e){
			//.. tratar exceção de alguma forma ..//
			 echo 'ERROR: ' . $e->getMessage();
		}
	}

}




?>