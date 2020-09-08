<?php 


	class InsereEscala{
		private $input;
		private $dia;
		private $mes;
		private $ano;

		public function __set($attr, $value){
			$this->$attr = $value;
		}

		public function __get($attr){
			return $this->$attr;
		}
	}