<?php 
$control = 'query';
require 'controll.php';

if(isset($_GET['alterado']) and $_GET['alterado'] == 'true'){?>
			<div class="w-100 p-1 bg-success">
				<h1 class=" text-light text-center">Atualizado :)<h1>
			</div>
<?php }else if(isset($_GET['alterado']) and $_GET['alterado'] == 'false'){?> 
		<div class="w-100 p-1 bg-danger">
			<h1 class=" text-light text-center">Erro ao atualizar :( </h1>
		</div>
<?php }else if(isset($_GET['alterado']) and $_GET['alterado'] == 'null'){?>
		<div class="w-100 p-1 bg-danger">
			<h1 class=" text-light text-center">Por favor preencha os campos </h1>
		</div>
<?php } ?>
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
		<a href="index.php" class="rounded list-inline-item bg-warning text-light font-weight-bold text-decoration-none" style="padding: 5px 13%; margin: 2% 0;">
			Escala
		</a>
		<a class="rounded list-inline-item bg-warning text-light font-weight-bold text-decoration-none" href="nova_escala.php" style="padding: 5px 13%; margin: 2% 0;">
			Nova Escala
		</a>
		<a class=" roundedlist-inline-item bg-warning text-light font-weight-bold text-decoration-none" style="padding: 5px 13%; margin: 2% 0;">
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

	?>
			<?php	
				foreach ($dados as $chave => $valor){
					
					if($lengCount == 1){?>

					<?php } ?> 

						<?php		
							$data = explode('-', $valor['data']);
						?>
						<form action="controll.php" method="GET" class="justify-content-center">
							<label class="font-weight-bold m-1"><u>Alterar Escala</u></label>
							<input type="text" name="input" value="<?=$valor['nome']; ?>"placeholder="Segunda" class="text-center form-control mb-3">
							<span class="h5 m-3">Dia: 
								<input class="text-center p-1" type="text" name="data" value="<?=$data[2].'/'.$data[1].'/'.$data[0];?>"> 
								<input class="text-center p-1" type="text" name="obs" placeholder="Observação">
								<input type="hidden" name="id" value="<?=$valor['id'];?>" >
								<button name='att' class="text-center btn-primary p-1 rounded text-decoration-none">Alterar</button>
							</span><br><br>
							</form>
							<?php
							
							
							
							$lengCount++;
							
							if($lengCount > 5){ 
								?>
								
								<div class="text-center text-danger">
								
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