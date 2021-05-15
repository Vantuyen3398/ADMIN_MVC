<?php 
	class ConnectDB {
		function connectDatabase(){
			$server = 'localhost'; //$server = '127.0.0.1';
			$username = 'root';
			$password = ''; //$password = '';
			$database = 'admin';
			$this->conn = mysqli_connect($server, $username, $password, $database);
			return $this->conn;
		}
	}
?>