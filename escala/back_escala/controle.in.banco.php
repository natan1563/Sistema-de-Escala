<?php


	class Acoes {

		private $conn;
		private $input;
		private $dia;
		private $mes;
		private $ano;

		public function controlador(Conexao $conn,  $input,  $dia,  $mes,  $ano){
			$this->conn = $conn->conectar();
			$this->input = $input;
			$this->dia = $dia;
			$this->mes = $mes;
			$this->ano = $ano;
		}

		public function insere(){
			$query = 'INSERT INTO escala(nome, data) VALUES(:nome, :data)';
			$stmt = $this->conn->prepare($query);
			$data = $this->ano.'-'.$this->mes.'-'.$this->dia;
			$stmt->bindValue(':nome', $this->input); 
			$stmt->bindValue(':data', $data); 
			return $stmt->execute();
			
		}

		public function select(){
			$query = "SELECT * FROM escala";
			
			$stmt = $this->conn->prepare("SELECT * FROM escala");

			$stmt->execute();
		}
		public function atualiza(){

		}

		public function deleta(){

		}



	}




?>