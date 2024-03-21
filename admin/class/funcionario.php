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
    public $admissaoFuncionaro;
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
            $this->admissaoFuncionaro = $linha["admissaoFuncionaro"];
            $this->fotoFuncionario = $linha["fotoFuncionario"];
            $this->statusFuncionario = $linha["statusFuncionario"];
        }
    }

    public function Atualizar()
    {
        $sql = "UPDATE funcionarios SET nomeFuncionario = '".$this->nomeFuncionario."', dataNascFuncionario = '".$this->dataNascFuncionario."', cargoFuncionario = '".$this->cargoFuncionario."', emailFuncionario = '".$this->emailFuncionario."', senhaFuncionario = '".$this->senhaFuncionario."', nivelFuncionario = '".$this->nivelFuncionario."', telefoneFuncionario = '".$this->telefoneFuncionario."', admissaoFuncionaro = '".$this->admissaoFuncionaro."', fotoFuncionario = '".$this->fotoFuncionario."', statusFuncionario = '".$this->statusFuncionario."', fotoFuncionario = '".$this->fotoFuncionario."' WHERE idFuncionario = ".$this->idFuncionario;

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }


    public function Inserir()
    {

        $sql = "      INSERT INTO funcionarios ( nomeFuncionario ,

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

    public function Cadastrar()
    {
        $sql = "INSERT INTO funcionarios (nomeFuncionario, dataNascFuncionario, cargoFuncionario, emailFuncionario, senhaFuncionario, nivelFuncionario, telefoneFuncionario, admissaoFuncionaro, fotoFuncionario, statusFuncionario) VALUES ('".$this->nomeFuncionario."','".$this->dataNascFuncionario."', '".$this->cargoFuncionario."', '".$this->emailFuncionario."', '".$this->senhaFuncionario."', '".$this->nivelFuncionario."', '".$this->telefoneFuncionario."', '".$this->admissaoFuncionaro."', '".$this->fotoFuncionario."', '".$this->statusFuncionario."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }

    public function verificarLogin(){
        
        $sql = "SELECT * FROM funcionarios WHERE emailFuncionario = '".$this->emailFuncionario."' AND senhaFuncionario = '".$this->senhaFuncionario."'";

        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);
        $funcionario = $resultado->fetch();
        
        if ($funcionario) {
            return $funcionario['idFuncionario'];
        }else{
            return false;
        }
    }
}

if (isset($_POST['emailLogin'])) {

    $funcionario = new funcionarioClass();

    $emailLogin = $_POST['emailLogin'];
    $senhaLogin = $_POST['senhaLogin'];

    $funcionario->emailFuncionario = $emailLogin;
    $funcionario->senhaFuncionario = $senhaLogin;

    

    if ($idFuncionario = $funcionario->verificarLogin()) {
        session_start();
        $_SESSION['idFuncionario'] = $idFuncionario;
        echo json_encode(['success' => true, 'message' => 'Login foi realizado com sucesso!', 'idFuncionario' => $idFuncionario]);
    }else{
        echo json_encode(['success' => false, 'message' => 'E-mail ou senha inválidos!']);
    }
}
