<?php 

    require_once('conexao.php'); 

    class funcionarioClass {

        public $idFuncionario;
        public $nomeFuncionario;
        public $dataNascFuncionario;
        public $cargoFuncionario;
        public $emailFuncionario;
        public $senhaFuncionario;
        public $nivelFuncionario;
        public $telefoneFuncionario;
        public $fotoFuncionario;
        public $statusFuncionario;

        
        public function Inserir (){

            $sql = "      INSERT INTO fornecedores ( nomeFuncionario ,

                                                    dataNascFuncionario,

                                                    cargoFuncionario,

                                                    emailFuncionario ,

                                                    senhaFuncionario,

                                                    nivelFuncionario,

                                                    telefoneFuncionario,

                                                    fotoFuncionario,

                                                    statusFuncionario )
  
  
                            VALUES
                                            ('".$this->nomeFuncionario ."',

                                             '".$this->dataNascFuncionario."',

                                             '".$this->cargoFuncionario."',

                                             '".$this->emailFuncionario."',

                                             '".$this->senhaFuncionario."',

                                            '".$this->nivelFuncionario ."',

                                            '".$this->telefoneFuncionario ."',
                                            
                                            '".$this->fotoFuncionario ."',

                                            '".$this->statusFuncionario ."',)";

    $conn = conexao::Ligarconexao();

    $conn->exec($sql);

    }
    
    
    public function ListarFuncionario() {
         
        $sql = "SELECT * FROM funcionarios WHERE statusFuncionario = 'ATIVO';";
        $connect = conexao::Ligarconexao();
        $resultado = $connect -> query($sql);
        $lista = $resultado -> fetchAll();
        return $lista;

    }



    }