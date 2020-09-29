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
			$query = 'SELECT * FROM escala ORDER BY id ASC';
			$stmt = $conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);	
		}

		public function atualiza(Conexao $conn, $id, $input, $data, $obs = ''){
			$conn = $conn->conectar();
			$data = explode('/', $data);
			$data = $data[2].'-'.$data[1].'-'.$data[0];
			$query = "UPDATE escala SET nome = ?, data = ?, obs = ? WHERE id = ?";
			$stmt = $conn->prepare($query);
			$stmt->bindValue(1, $input);
			$stmt->bindValue(2, $data);
			$stmt->bindValue(3, $obs);
			$stmt->bindValue(4, $id);
			return $stmt->execute();

		}

		public function deleta(Conexao $conn, $id){
			$conn = $conn->conectar();
			$query = "DELETE FROM escala WHERE id = ?";
			$stmt = $conn->prepare($query);
			$stmt->bindValue(1, $id);
			return $stmt->execute();	
		}



	}




?>