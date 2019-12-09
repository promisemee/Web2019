<?php
	class Model{
		public $pdo;
		private $host = 'localhost';
		private $dbuser ='d1234';
		private $dbpwd = '1234';
		private $database = 'mysql';

		public function __construct(){
			
			$this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database", $this->dbuser, $this->dbpwd);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			if (!$this->pdo)
				die('Could not connect: '.mysql_error());
		}

		public function selectSQL($sql){
			$stmt = $sql;
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}

		function getEmail($email){
			$sql = 'SELECT * from formvalidation where email =:u';
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':u', $email);
			$stmt -> execute();

			return $stmt;
		}

		public function insertSQL($name, $email, $dob, $gender, $s1, $s2, $city, $zip){
			try{
				$sql = 'INSERT INTO FormValidation VALUES(?, ?, ?, ?, ?, ?, ?, ?)';
				$stmt = $this->pdo->prepare($sql);
            	$stmt->execute([$name, $email, $dob, $gender, $s1, $s2, $city, $zip]);
            	return $stmt;
			}catch(Exception $e){
				var_dump('Error Uploading:', $e->getMessage());
			}
		}
	}