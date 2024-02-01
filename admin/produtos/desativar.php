<?php
require_once('class/produtos.php');
$id = $_GET['id'];

$produto = new ProdutoClass();
$produto-> idProduto = $id;
$produto->Desativar();
?>