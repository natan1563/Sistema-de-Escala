<?php

if(isset($_GET['btn-cadastro'])){

	if(!empty($_GET['sInput']) and !empty($_GET['tInput']) and !empty($_GET['qaInput']) and !empty($_GET['qiInput']) and !empty($_GET['seInput'])){
		//Instancia
		$insere_escala = new InsereEscala();
		//setando os inputs do primeiro dia
		$insere_escala->__set('input', $_GET['sInput']);
		$insere_escala->__set('dia', $_GET['primeirodia']);
		$insere_escala->__set('mes', $_GET['primeiromes']);
		$insere_escala->__set('ano', $_GET['primeiroano']);
		//pegando os dados inputados
		$input = $insere_escala->__get('input');
		$dia = $insere_escala->__get('dia');
		$mes = $insere_escala->__get('mes');
		$ano = $insere_escala->__get('ano');
		//instancia das ações e da conexao
		$conn = new Conexao();

		try{
			$action = new Acoes($conn, $input, $dia, $mes, $ano);
			$action->insere();
			header('Location: nova_escala.php');
		}catch(PDOException $e){
			echo'<p>'.$e->getMessage().': <a href="nova_escala.php">tente novamente</a></p>';
		}
	}
}

?>