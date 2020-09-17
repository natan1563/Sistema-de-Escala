<?php 
$control = 'query';
require 'controll.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Escala da telemática</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>
<body>
	<h1 class="text-center display-3 font-weight-bold text-primary" style="text-shadow: 2px 2px #191970;">TeleMágica</h1>

	<ul class="list-inline text-center" style="width: 100%; margin-top: 20px;">
		<a href="index.php" class="list-inline-item bg-warning text-light font-weight-bold text-decoration-none" style="padding: 5px 13%; margin: 2% 0;">
			Escala
		</a>
		<a class="list-inline-item bg-warning text-light font-weight-bold text-decoration-none" href="nova_escala.php" style="padding: 5px 13%; margin: 2% 0;">
			Nova Escala
		</a>
		<a class="list-inline-item bg-warning text-light font-weight-bold text-decoration-none" style="padding: 5px 13%; margin: 2% 0;">
			Alterar Escala
		</a>
	</ul>

	<p class="h2 text-center display-4 font-weight-bold p-5 align-items-cente" style="margin-bottom: 3%;"><?= date('d/m/Y'); ?></p>
	<h1 class="text-center text-danger font-weight-bold">Alterar Escala</h1>
	<div class="bg-warning font-weight-bold row pt-3 mb-3">
		<p class="list-inline-item text-center col">
			Segunda
		</p>

		<p class="list-inline-item text-center col">
			Terça
		</p>

		<p class="list-inline-item text-center col">
			Quarta
		</p>

		<p class="list-inline-item text-center col">
			Quinta
		</p>

		<p class="list-inline-item text-center col">
			Sexta
		</p>
	</div>
	<?php
	$count = 0;
	$lengCount = 1;
	$ids = '';
	?>
			<?php	
				foreach ($dados as $chave => $valor){
					
					if($lengCount == 1){?>
					<div class="bg-success font-weight-bold text-center row" style="border-top: 4px solid white; padding-top: 20px;">

					<?php } ?>
				
			<?php			//if($count < 5 and $lengCount < 25){	
							$data = explode('-', $valor['data']);
							?>
							
							<?php	
						
							echo '<a class="col text-light pb-3">'.$valor['nome'].'<br> Data: '.$data[2].'/'.$data[1].'/'.$data[0].'</a>';

							?>
							
							<?php
							
							if($lengCount < 5){
								$ids .= $valor['id'].'-';
							}else{
								$ids .= $valor['id'];
							}
							
							$lengCount++;
							
							if($lengCount > 5){ 
								?>
								</div>
								<div class="text-center text-danger">
								<a href="altera_escala.php?ids=<?=$ids?>" class="text-primary text-decoration-none"style="width: 100%; text-align: center;">Alterar</a>
								</div>
								<?php
								$ids = '';
								$lengCount = 1;
								?>  <?php
							}
							
							
					}
				

					
			
			?>
</body>
</html>