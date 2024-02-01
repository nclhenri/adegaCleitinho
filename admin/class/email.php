<?php
require_once('conexao.php');
 
class contatoEmail
{
    public $emailContato;
    public $nomeContato;
    public $telContato;
    public $assuntoContato;
 
    public function Inserir()
    {
 
        $sql = "              INSERT INTO   contato     ( nomeContato,
                                                        emailContato,
                                                        telContato,
                                                        assuntoContato)
 
                                    VALUES
                                             ('" . $this->nomeContato . "',
                                              '" . $this->emailContato . "',
                                              '" . $this->telContato . "',
                                              '" . $this->assuntoContato . "')";
 
 
        $connect = conexao::Ligarconexao();
 
        $connect->exec($sql);
    }
 
    public function ListarContato()
    {
        $sql = "SELECT * FROM contato ORDER BY idContato  ASC";
 
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }
 
 
}