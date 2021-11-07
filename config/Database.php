<?php
	include_once 'variables.php';

	class Database{
		//params
		private $host = DB_HOST;
		private $db_name = DB_NAME;
		private $username = DB_USERNAME;
		private $password = DB_PASS;
		private $conn;

		// Connect DB
		public function connect(){
			$this->conn = null;

			try {
				$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo 'Contection Error: ' . $e->getMessage();
			}

			return $this->conn;
		}

	}
