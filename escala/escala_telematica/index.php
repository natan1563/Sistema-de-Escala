<?php 
$control = 'query';
require 'controll.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Escala da telemática</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center display-3 font-weight-bold text-primary" style="text-shadow: 2px 2px #191970;">TeleMágica</h1>

	<ul class="list-inline text-center" style="width: 100%; margin-top: 20px;">
		<a href="index.php" class="list-inline-item bg-warning text-light font-weight-bold" style="padding: 5px 13%; margin: 2% 0;">
			Escala
		</a>
		<a class="list-inline-item bg-warning text-light font-weight-bold" href="nova_escala.php" style="padding: 5px 13%; margin: 2% 0;">
			Nova Escala
		</a>
		<a class="list-inline-item bg-warning text-light font-weight-bold" style="padding: 5px 13%; margin: 2% 0;">
			Alterar Escala
		</a>
	</ul>

	<p class="h2 text-center display-4 font-weight-bold"><?= date('d/m/Y'); ?></p>

	<?php
		foreach ($dados as $chave => $valor) {
			echo $valor;
		}
	
	?>
</body>
</html>