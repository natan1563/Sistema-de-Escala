<?php


	class Acoes {

		private $conn;
		private $input;
		private $dia;
		private $mes;
		private $ano;

		public function __construct(Conexao $conn,  $input,  $dia,  $mes,  $ano){
			$this->conn = $conn->conectar();
			$this->input = $input;
			$this->dia = $dia;
			$this->mes = $mes;
			$this->ano = $ano;
		}

		public function insere(){
			$query = "INSERT INTO escala(nome, data)VALUES(:nome, :data)";
			$stmt = $this->conn->prepare($query); 
			$stmt->bindValue(':nome', $this->input);
			$stmt->bindValue(':data', $this->dia.'/'.$this->mes.'/'.$this->ano);
			$stmt->execute();
		}

		public function select(){

		}

		public function atualiza(){

		}

		public function deleta(){

		}



	}




?>