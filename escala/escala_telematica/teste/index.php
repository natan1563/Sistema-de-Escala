<?php 


include ('pdf-php-0.12.63/src/Cezpdf.php');
$pdf = new Cezpdf('a4','landscape','color',[1,1,1]);
$pdf->selectFont('Helvetica');
$pdf->ezSetCmMargins(0, 0, 7.89, 0);
$pdf->ezText('Escala Telematica',50);
$pdf->ezSetDy(-100, 'makeSpace');
$pdf->ezStartPageNumbers(30,30,15,'','',1);
$data = [
['num'=>1,'Segunda'=>'gandalf','type'=>'wizard' ]
,['num'=>2,'Segunda'=>'bilbo','type'=>'hobbit','url'=>'https://github.com/rosp
df/pdf-php' ]
,['num'=>3,'Segunda'=>'frodo','type'=>'hobbit' ]
,['num'=>4,'Segunda'=>'saruman','type'=>'bad dude','url'=>'https://github.com/rospdf/pdf-php' ]
,['num'=>5,'Segunda'=>'sauron','type'=>'really bad dude', 'typeFill' =>
[0.7,0.8,0.8], 'typeColor' => [0.8,0.1,0.1] ]
];
$pdf->ezSetCmMargins(0, 0, 0.1, 0);
$dados = [
	['Segunda'=>'Natã', 'Terça'=>'Silva', 'Quarta'=>'Jailton', 'Quinta'=>'Paloma', 'Sexta'=>'Thascila'],
	['Segunda'=>'Natã', 'Terça'=>'Silva', 'Quarta'=>'Jailton', 'Quinta'=>'Paloma', 'Sexta'=>'Thascila'],
	['Segunda'=>'Natã', 'Terça'=>'Silva', 'Quarta'=>'Jailton', 'Quinta'=>'Paloma', 'Sexta'=>'Thascila']
	
];
$pdf->ezTable($dados, $cols, 'Dias', [
	'gridlines'=>EZ_GRIDLINE_DEFAULT,
	'alignHeadings'=>'center',
	'showLines'=>1,
	'eveColumns'=>5,
	'width'=>789,

]);


/*$pdf->ezTable($data,$cols,'Escala Telematica', [
 'gridlines'=> EZ_GRIDLINE_DEFAULT,
 'shadeHeadingCol'=> [0.6,0.6,0.5],
 'alignHeadings'=>'center',
 'width'=>550,
 'cols'=> [
 'Segunda'=> ['bgcolor'=> [0.9,0.9,0.7] ],
 'type'=> ['bgcolor'=> [0.6,0.4,0.2] ],
 ''
 ]
]);*/


$pdf->ezNewPage ();
$pdf->ezStream();
?>
