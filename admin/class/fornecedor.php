<?php 
    require_once('conexao.php');

    class fornecedorclass {

        public $idFonecedor ;

        public $nomeFornecedor;

        public $telefoneFornecedor;

        public $enderecoFornecedor;

        public $cepFornecedor;

        public $cnpjFornecedor;
        
        public $statusFornecedor;


    

        public function Inserir (){

            $sql = "      INSERT INTO fornecedores ( nomeFornecedor ,

                                                        telefoneFornecedor,

                                                        enderecoFornecedor,

                                                        cepFornecedor ,

                                                        cnpjFornecedor,

                                                        statusFornecedor )
  
  
                            VALUES
                                            ('".$this->nomeFornecedor ."',

                                             '".$this->telefoneFornecedor."',

                                             '".$this->enderecoFornecedor."',

                                             '".$this->cepFornecedor."',

                                             '".$this->cnpjFornecedor."',

                                            '".$this->statusFornecedor ."')";

    $conn = conexao::Ligarconexao();

    $conn->exec($sql);

    }

    
    public function ListarFornecedor() {
        $sql = "SELECT * FROM fornecedores WHERE statusFornecedor = 'ATIVO'";
        $connect = conexao::Ligarconexao();
        $resultado = $connect -> query($sql);
        $lista = $resultado -> fetchAll();
        return $lista;

    }
    public function Desativar()
    {
        $sql = "UPDATE fornecedores SET statusFornecedor = 'DESATIVADO' WHERE idFonecedor =  $this->idFonecedor";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
        echo"<script> document.location = 'index.php?p=fornecedores'; </script>";
    }

    public function Atualizar(){
        $sql = "UPDATE fornecedores SET nomeFornecedor = '".$this->nomeFornecedor."', telefoneFornecedor = '".$this->telefoneFornecedor."', enderecoFornecedor = '".$this->enderecoFornecedor."', cepFornecedor = '".$this->cepFornecedor."', cnpjFornecedor = '".$this->cnpjFornecedor."', statusFornecedor = '".$this->statusFornecedor."' WHERE idFonecedor = '".$this->idFonecedor."' ";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=fornecedores'</script>";
    }

    public function __construct($id = false)
    {
        if ($id) {
            $this->idFonecedor = $id;
            $this->Carregar();
        }
    }

    public function Carregar(){
        $query = "SELECT * FROM fornecedores WHERE idFonecedor = ".$this->idFonecedor;

        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha){
            $this -> nomeFornecedor = $linha["nomeFornecedor"];
            $this -> telefoneFornecedor = $linha["telefoneFornecedor"];
            $this -> enderecoFornecedor = $linha["enderecoFornecedor"];
            $this -> cepFornecedor = $linha["cepFornecedor"];
            $this -> cnpjFornecedor = $linha["cnpjFornecedor"];
            $this -> statusFornecedor = $linha["statusFornecedor"];
            $this -> idFonecedor = $linha["idFonecedor"];

        }
    }

    public function Cadastrar()
    {
        $sql = "INSERT INTO fornecedores(nomeFornecedor, telefoneFornecedor, enderecoFornecedor, cepFornecedor, cnpjFornecedor, statusFornecedor) VALUES ('".$this->nomeFornecedor."','".$this->telefoneFornecedor."','".$this->enderecoFornecedor."','".$this->cepFornecedor."','".$this->cnpjFornecedor."','".$this->statusFornecedor."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=fornecedores'</script>";
    }
}
