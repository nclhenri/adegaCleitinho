<?php 
require_once('class/usuarios.php');

$id = $_GET['id'];

$usuario = new UsuarioClass();
$usuario-> idUsuario = $id;
$usuario->Desativar();

?>