<?php

require_once('conexao.php');

class funcionarioClass
{

    public $idFuncionario;
    public $nomeFuncionario;
    public $dataNascFuncionario;
    public $cargoFuncionario;
    public $emailFuncionario;
    public $senhaFuncionario;
    public $nivelFuncionario;
    public $telefoneFuncionario;
    public $admissaoFuncionario;
    public $fotoFuncionario;
    public $statusFuncionario;

    public function __construct($id = false)
    {
        if ($id) {
            $this->idFuncionario = $id;
            $this->Carregar();
        }
    }

    public function Carregar()
    {
        $query = "SELECT * FROM funcionarios WHERE idFuncionario=" .$this->idFuncionario;

        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeFuncionario = $linha["nomeFuncionario"];
            $this->dataNascFuncionario = $linha["dataNascFuncionario"];
            $this->cargoFuncionario = $linha["cargoFuncionario"];
            $this->emailFuncionario = $linha["emailFuncionario"];
            $this->senhaFuncionario = $linha["senhaFuncionario"];
            $this->nivelFuncionario = $linha["nivelFuncionario"];
            $this->telefoneFuncionario = $linha["telefoneFuncionario"];
            $this->admissaoFuncionario = $linha["admissaoFuncionaro"];
            $this->fotoFuncionario = $linha["fotoFuncionario"];
            $this->statusFuncionario = $linha["statusFuncionario"];
        }
    }

    public function Atualizar()
    {
        $sql = "UPDATE funcionarios SET nomeFuncionario = '".$this->nomeFuncionario."', dataNascFuncionario = '".$this->dataNascFuncionario."', cargoFuncionario = '".$this->cargoFuncionario."', emailFuncionario = '".$this->emailFuncionario."', senhaFuncionario = '".$this->senhaFuncionario."', nivelFuncionario = '".$this->nivelFuncionario."', telefoneFuncionario = '".$this->telefoneFuncionario."', admissaoFuncionaro = '".$this->admissaoFuncionario."', fotoFuncionario = '".$this->fotoFuncionario."', statusFuncionario = '".$this->statusFuncionario."' WHERE idFuncionario = ".$this->idFuncionario;

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }


    public function Inserir()
    {

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
                                            ('" . $this->nomeFuncionario . "',

                                             '" . $this->dataNascFuncionario . "',

                                             '" . $this->cargoFuncionario . "',

                                             '" . $this->emailFuncionario . "',

                                             '" . $this->senhaFuncionario . "',

                                            '" . $this->nivelFuncionario . "',

                                            '" . $this->telefoneFuncionario . "',
                                            
                                            '" . $this->fotoFuncionario . "',

                                            '" . $this->statusFuncionario . "',)";

        $conn = conexao::Ligarconexao();

        $conn->exec($sql);
    }


    public function ListarFuncionario()
    {

        $sql = "SELECT * FROM funcionarios WHERE statusFuncionario = 'ATIVO';";
        $connect = conexao::Ligarconexao();
        $resultado = $connect->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Desativar()
    {
        $sql = "UPDATE funcionarios SET statusFuncionario = 'DESATIVADO' WHERE idFuncionario = $this->idFuncionario";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
        echo "<script> document.location = 'index.php?p=funcionarios'; </script>";
    }
}
