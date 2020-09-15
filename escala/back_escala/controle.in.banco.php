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

		public function select(Conexao $conn){
			$conn = $conn->conectar();
			$query = 'SELECT * FROM escala';
			$stmt = $conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);	
		}
		public function atualiza(){

		}

		public function deleta(){

		}



	}




?>