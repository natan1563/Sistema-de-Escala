
<?php function select($day, $dName, $mName, $yName){ ?>

<select name="<?=$dName?>">

	<?php

	switch ($day) {
		case $day == 1:
			$dia = 'Segunda';
			break;
		case $day == 2:
			$dia = 'Terça';
			break;
		case $day == 3:
			$dia = 'Quarta';
			break;
		case $day == 4:
			$dia = 'Quinta';
			break;
		case $day == 5:
			$dia = 'Sexta';
	}

	$count = 1;
	$month = 1;
	$year = 2020;
	$form = 1;

	while($count <= 31){ 
		
		if($count < 10){
			$count = '0'.$count;
		}

		?>	
		
		<option value="<?=$count?>" name="dia"><?=$count;?></option> 

			<?php
				$count++;
				$form++; } 
				$form = 1; 
			?></select>

	<span class="h5">Mês</span>
	<select name="<?=$mName?>">
		<?php 
		while ($month <= 12) { 

			if($month < 10){
				$month = '0'.$month;
			}
			?>
			<option value="<?=$month?>" name="mes"><?=$month?></option> <?php
			$month++;
			if($form <= 12){
				$form++;
			}
		} ?>
	</select>

	<span class="h5">Ano</span>

	<select name="<?=$yName?>"><?php 
		while ($year <= 2050) { ?>
			<option value="<?=$year?>" name="ano"><?=$year?></option> <?php
			$year++;
		} 
		?></select><br>

<?php } ?>


