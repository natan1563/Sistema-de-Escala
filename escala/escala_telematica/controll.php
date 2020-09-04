<?php
require '../../back_escala/conexao.php';
require '../../back_escala/adm.escala.php';

$insere_escala = new InsereEscala();

//Ver como fazer de forma dinamica 
$insere_escala->__set('input', $_GET['sInput']);
$input = $insere_escala->__get('input');


?>