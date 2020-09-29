<?php
include ('../../../back_escala/conexao.php');
$conectar = new Conexao();
$conn = $conectar->conectar();
$query = "SELECT nome FROM escala";
$stmt = $conn->query($query);

$dados = [];
$count = 0;
$rt = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($rt as $key => $value){
		$arm[$count] = $value;
		$count++;
}
	
	$contador = $stmt->rowCount();
	$count = 0;
	$newCount = 0;
	$dados = [];
	while($newCount < $contador){
		while($count < 5){
			echo '<pre>';
			print_r($arm[$newCount]);
			echo '<pre>';
			echo $newCount;

			switch ($count) {
				case $count == 0:
					$dados[] = ['Segunda'=>$arm[$newCount]];
					$dados[] .= ',';
					break;
				case $count == 1:
					$dados[] .= ['Terça'=>$arm[$newCount]];
					break;

				case $count == 2:

					break;

				case $count == 3:

					break;

				case $count == 4:

					break;

				default:
					# code...
					break;
			}
			$newCount++;
			$count++;
		}

		if($count >= 5){
			echo '<hr>';
			$count = 0;		
		}
	}
	

?>