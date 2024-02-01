<?php 
require_once('class/fornecedor.php');
$id = @$_GET['id'];
$fornecedor = new fornecedorclass();
$fornecedor-> 	idFonecedor  = $id;
$fornecedor->Desativar();

