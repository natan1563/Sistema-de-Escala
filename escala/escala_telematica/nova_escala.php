<?php 
	require 'functions.php'; 

	if(isset($_GET['insere']) and $_GET['insere'] == 'true'){?>
			<div class="w-100 p-1 bg-success">
				<h1 class=" text-light text-center">Inserido com sucesso!</h1>
			</div>
<?php }else if(isset($_GET['insere']) and $_GET['insere'] == 'false'){?> 
		<div class="w-100 p-1 bg-danger">
			<h1 class=" text-light text-center">Erro ao inserir :( </h1>
		</div>
<?php }else if(isset($_GET['insere']) and $_GET['insere'] == 'null'){?>
		<div class="w-100 p-1 bg-danger">
			<h1 class=" text-light text-center">Por favor preencha todos os campos </h1>
		</div>
<?php } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Escala da telemática</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center display-3 font-weight-bold text-primary" style="text-shadow: 2px 2px #191970;">TeleMágica</h1>

	<ul class="list-inline text-center" style="width: 100%; margin-top: 20px;">
		<a href="index.php" class="rounded list-inline-item list-inline-item bg-warning text-light font-weight-bold text-decoration-none" style="padding: 5px 13%; margin: 2% 0;">
			Escala
		</a>
		<a class="rounded list-inline-item list-inline-item bg-warning text-light font-weight-bold text-decoration-none" style="padding: 5px 13%; margin: 2% 0;">
			Nova Escala
		</a>
		<a class="rounded list-inline-item list-inline-item bg-warning text-light font-weight-bold text-decoration-none" href="altera_escala.php" style="padding: 5px 13%; margin: 2% 0;">
			Alterar Escala
		</a>
	</ul>

	<p class="h2 text-center display-4 font-weight-bold"><?= date('d/m/Y'); ?></p>
<!-- controll.php?input_escala=true -->
	<form action="controll.php" method="GET" class="justify-content-center">
		<label>Nova Escala</label>
		<input type="text" name="sInput" placeholder="Segunda" class="text-center form-control mb-3">
		<span class="h5 m-3">Dia: <?php select(1, 'primeirodia', 'primeiromes', 'primeiroano'); ?></span><br>
		<input type="text" name="tInput" placeholder="Terça" class="text-center form-control mb-3">
		<span class="h5 m-3">Dia: <?php select(2, 'segundodia', 'segundomes', 'segundoano'); ?></span><br>
		<input type="text" name="qaInput" placeholder="Quarta" class="text-center form-control mb-3">
		<span class="h5 m-3">Dia: <?php select(3, 'terceirodia', 'terceiromes', 'terceiroano'); ?></span><br>
		<input type="text" name="qiInput" placeholder="Quinta" class="text-center form-control mb-3">
		<span class="h5 m-3">Dia: <?php select(4, 'quartodia', 'quartomes', 'quartoano'); ?></span><br>
		<input type="text" name="seInput" placeholder="Sexta" class="text-center form-control mb-3">
		<span class="h5 m-3">Dia: <?php select(5, 'quintodia', 'quintomes', 'quintoano'); ?></span><br>
		<button style="width: 100%; height: 70px;" class="btn-danger center" name="btn-cadastro">Confirmar</button>
	</form>

</body>
</html>