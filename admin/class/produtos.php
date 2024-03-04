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
    public $idFonecedor;

    public function __construct($id = false)
    {
        if ($id) {
            $this->idProduto = $id;
            $this->Carregar();
        }
    }

    public function Carregar()
    {
        $query = "SELECT * FROM produto WHERE idProduto=" .$this->idProduto;

        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->marcaProduto = $linha["marcaProduto"];
            $this->nomeProduto = $linha["nomeProduto"];
            $this->validadeProduto = $linha["validadeProduto"];
            $this->alcoolicoProduto = $linha["alcoolicoProduto"];
            $this->quantidadeProduto = $linha["quantidadeProduto"];
            $this->statusProduto = $linha["statusProduto"];
            
        }
    }

    public function Atualizar()
    {
        // var_dump($this->idProduto);
        $sql = "UPDATE produto SET marcaProduto = '".$this->marcaProduto."',nomeProduto='".$this->nomeProduto."' , validadeProduto='".$this->validadeProduto."',alcoolicoProduto='".$this->alcoolicoProduto."',quantidadeProduto='".$this->quantidadeProduto."',statusProduto='".$this->statusProduto."' WHERE idProduto='".$this->idProduto."'"; 

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);


        echo "<script>document.location='index.php?p=produtos'</script>";
    }

    public function Inserir()
    {
        $sql = "INSERT INTO produto(marcaProduto, nomeProduto, validadeProduto, alcoolicoProduto, quantidadeProduto, statusProduto) VALUES ('" . $this->marcaProduto . "','" . $this->nomeProduto . "','" . $this->validadeProduto . "','" . $this->alcoolicoProduto . "','" . $this->quantidadeProduto . "','" . $this->statusProduto . "')";

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

    public function Desativar()
    {
        $sql= "UPDATE produto SET statusProduto = 'DESATIVADO' WHERE idProduto = $this->idProduto";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
        echo"<script> document.location = 'index.php?p=produtos'; </script>";
    }

    public function Cadastrar(){
        $sql = "INSERT INTO `produto`(`marcaProduto`, `nomeProduto`, `validadeProduto`, `alcoolicoProduto`, `quantidadeProduto`, `statusProduto`, `idFonecedor`) VALUES ('".$this->marcaProduto."','".$this->nomeProduto."','".$this->validadeProduto."','".$this->alcoolicoProduto."','".$this->quantidadeProduto."','".$this->statusProduto."','".$this->idFonecedor."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
        
        echo "<script>document.location='index.php?p=produtos'</script>";
    }
}
?>
