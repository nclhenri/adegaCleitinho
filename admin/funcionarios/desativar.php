<?php 
require_once('class/funcionario.php');
$id = $_GET['id'];

$funcionario = new funcionarioClass();
$funcionario-> idFuncionario = $id;
$funcionario-> Desativar();
?>