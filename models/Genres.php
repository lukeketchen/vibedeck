<?php
	class Genres{
		//DB properties
		private $conn;
		private $table = 'genres';

		// Genre properties
		public $id;
		public $title;

		// Contructor
		public function __construct($db){
			$this->conn = $db;
		}

		// get genres
		public function all(){
			$query = 'SELECT * FROM ' . $this->table;

			// Prepared statement
			$stmt = $this->conn->prepare($query);

			// Execute query
			$stmt->execute();

			return $stmt;
		}
	}
