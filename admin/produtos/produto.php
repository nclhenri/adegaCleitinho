<?php 
$paginaAtual = @$_GET['p'];

if ($paginaAtual == '') {
    require_once ('listar.php');
}else {
    if ($paginaAtual == 'cadastrar') {
        require_once ('cadastrar.php');
    }
    if ($paginaAtual == 'atualizar') {
        require_once ('atualizar.php');
    }
    if ($paginaAtual == 'desativar') {
        require_once('desativar.php');
    }
}   
