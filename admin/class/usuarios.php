<?php
require_once('conexao.php');

class UsuarioClass
{
    public $idUsuario;
    public $nomeUsuario;
    public $emailUsuario;
    public $senhaUsuario;
    public $dataNascUsuario;
    public $telefoneUsuario;
    public $enderecoUsuario;
    public $cepUsuario;
    public $statusUsuario;

    public function Inserir()
    {
        $sql = "INSERT INTO usuarios(nomeUsuario, emailUsuario, senhaUsuario, dataNascUsuario, telefoneUsuario, enderecoUsuario, cepUsuario, statusUsuario) VALUES ('" . $this->nomeUsuario . "','" . $this->emailUsuario . "','" . $this->senhaUsuario . "','" . $this->dataNascUsuario . "','" . $this->telefoneUsuario . "','" . $this->enderecoUsuario . "','" . $this->cepUsuario . "','" . $this->statusUsuario . "')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
    }

    public function ListarUsuarios()
    {
        $sql = "SELECT * FROM usuarios WHERE statusUsuario = 'ATIVO' ORDER BY idUsuario ASC";

        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Desativar()
    {
        $sql = "UPDATE usuarios SET statusUsuario = 'DESATIVADO' WHERE idUsuario = $this->idUsuario";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
        echo"<script> document.location = 'index.php?p=clientes'; </script>";
    }
}