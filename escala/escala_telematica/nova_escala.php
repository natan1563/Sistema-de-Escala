<?php 
require 'functions.php'; 

echo '<pre>';
print_r($_GET);
echo '</pre>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Escala da telemática</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center display-3 font-italic">TelemáGica</h1>

	<ul class="list-inline text-center" style="width: 100%; margin-top: 20px;">
		<a class="list-inline-item bg-warning text-light font-weight-bold" style="padding: 5px 13%;">
			Escala
		</a>
		<a class="list-inline-item bg-warning text-light font-weight-bold" href="nova_escala.php" style="padding: 5px 13%;">
			Nova Escala
		</a>
		<a class="list-inline-item bg-warning text-light font-weight-bold" style="padding: 5px 13%;">
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