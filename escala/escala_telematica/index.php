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

	<p class="h2 text-center display-4 font-weight-bold p-5" style="margin-bottom: 3%;"><?= date('d/m/Y'); ?></p>
	
	<div class="bg-warning font-weight-bold text-center">
		<p class="list-inline-item text-center" style="width: 18%; margin: 10px 10px 10px -20px; border-right: 2px solid #111">
			Segunda
		</p>

		<p class="list-inline-item text-center" style="width: 18%;border-right: 2px solid #111 ">
			Terça
		</p>

		<p class="list-inline-item text-center" style="width: 18%;border-right: 2px solid #111">
			Quarta
		</p>

		<p class="list-inline-item text-center" style="width: 18%; border-right: 2px solid #111; ">
			Quinta
		</p>

		<p class="list-inline-item text-center" style="width: 18%;margin: 10px -20px 10px 10px;">
			Sexta
		</p>
	</div>
	<div class="bg-warning font-weight-bold text-center list-inline">
	<?php
	$count = 0;


		foreach ($dados as $chave => $valor) {
			if($count < 5){
				$data = explode('-', $valor['data']);
				?>
				<span class="">
				<?php	
				echo '<i class="list-inline">'.$valor['nome'].' Data: '.$data[2].'/'.$data[1].'/'.$data[0].'</i>';
				?>
				</span>
				<?php
				$count++;

			}

		}	
	
	?>
	</div>
</body>
</html>