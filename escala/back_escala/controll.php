<?php
require '../../back_escala/conexao.php';
require '../../back_escala/adm.escala.php';
require '../../back_escala/controle.in.banco.php';
if(isset($control) && $control == 'query'){
	$conn = new Conexao();
	$dado = new Acoes();
	
	$dados = $dado->select($conn);
}

if(isset($_GET['btn-cadastro'])){

	if(!empty($_GET['sInput']) and !empty($_GET['tInput']) and !empty($_GET['qaInput']) and !empty($_GET['qiInput']) and !empty($_GET['seInput'])){
		//Instancia

		try{	
		//Primeiro Dia
		
		 insereDados($_GET['sInput'], $_GET['primeirodia'], $_GET['primeiromes'], $_GET['primeiroano']);
		//Segundo Dia
		 insereDados($_GET['tInput'], $_GET['segundodia'], $_GET['segundomes'], $_GET['segundoano']);
		//Terceiro Dia
		 insereDados($_GET['qaInput'], $_GET['terceirodia'], $_GET['terceiromes'], $_GET['terceiroano']);
		//Quarto Dia
		 insereDados($_GET['qiInput'], $_GET['quartodia'], $_GET['quartomes'], $_GET['quartoano']);
		//Quinto Dia
		 insereDados($_GET['seInput'], $_GET['quintodia'], $_GET['quintomes'], $_GET['quintoano']);
		 header('Location: nova_escala.php?insere=true');
		}catch(Exception $e){
			header('Location: nova_escala.php?insere=false');
		}

		//Segundo Dia

		
	}else{
		echo 'Os campos não podem ficar vazios';
	}
}

?>