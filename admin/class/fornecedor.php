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

    
}
