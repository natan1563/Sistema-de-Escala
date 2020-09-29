<?php
	class Conexao{

		private $host = 'localhost';
		private $dbname = 'telematica';
		private $user = 'root';
		private $pass = '';

		public function conectar(){
			try{
				$conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;", "$this->user", "$this->pass");
				$conn->exec("set names utf8");
				
				return $conn;
			}catch(PDOException $e){
				echo '<p style="color: red;">'.$e->getMessage().'</p>';
			}
		}
	}


?>