<?php
	class Config{
		private $host = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "web";
		public $connectionString = false;
		public $connection = "";

		function dbconnect()
		{
			$this->connection = mysqli_connect($this->host,$this->username,$this->password);
			$this->connectionString = mysqli_select_db($this->connection,$this->dbname);
			return $this->connectionString;
		}

		function connection(){
			return $this->connection;
		}


	}


?>