<?php 
require_once('conexao.php');

class ProdutoClass
{
    public $idProduto;
    public $marcaProduto;
    public $nomeProduto;
    public $validadeProduto;
    public $alcoolicoProduto;
    public $quantidadeProduto;
    public $statusProduto;
    public $idFornecedor;

    public function Inserir()
    {
        $sql = "INSERT INTO produto(marcaProduto, nomeProduto, validadeProduto, alcoolicoProduto, quantidadeProduto, statusProduto, idFornecedor) VALUES ('" . $this->marcaProduto . "','" . $this->nomeProduto . "','" . $this->validadeProduto . "','" . $this->alcoolicoProduto . "','" . $this->quantidadeProduto . "','" . $this->statusProduto . "','". $this->idFornecedor ."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
    }

    public function ListarProdutos()
    {
        $sql = "SELECT * FROM produto WHERE statusProduto = 'ATIVO' ORDER BY idProduto ASC";

        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
?>
