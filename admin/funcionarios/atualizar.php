<?php
$id = $_GET["id"];
require_once('class/funcionario.php');
$funcionario = new funcionarioClass($id);

if (isset($_POST['nomeFuncionario'])) {

    $nomeFuncionario = $_POST['nomeFuncionario'];
    $dataNascFuncionario = $_POST['dataNascFuncionario'];
    $cargoFuncionario = $_POST['cargoFuncionario'];
    $emailFuncionario = $_POST['emailFuncionario'];
    $senhaFuncionario = $_POST['senhaFuncionario'];
    $nivelFuncionario = $_POST['nivelFuncionario'];
    $telefoneFuncionario = $_POST['telefoneFuncionario'];
    $admissaoFuncionaro = $_POST['admissaoFuncionaro'];
    $statusFuncionario = $_POST['statusFuncionario'];
    $arquivo = $_FILES['fotoFuncionario'];

    if ($arquivo['error']) {
        throw new Exception("o error foi: ", $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/funcionario/' . $arquivo['name'])) {
        $fotoFuncionario = 'funcionario/' . $arquivo['name']; // exercicio/corrida.png

    } else {
        throw new Exception("o error foi: ", $arquivo['error']);
    }



    require_once('class/funcionario.php');

    $funcionario->nomeFuncionario = $nomeFuncionario;
    $funcionario->dataNascFuncionario = $dataNascFuncionario;
    $funcionario->cargoFuncionario = $cargoFuncionario;
    $funcionario->emailFuncionario = $emailFuncionario;
    $funcionario->senhaFuncionario = $senhaFuncionario;
    $funcionario->nivelFuncionario = $nivelFuncionario;
    $funcionario->telefoneFuncionario = $telefoneFuncionario;
    $funcionario->admissaoFuncionaro = $admissaoFuncionaro;
    $funcionario->fotoFuncionario = $fotoFuncionario;
    $funcionario->statusFuncionario = $statusFuncionario;

    $funcionario->Atualizar();
}
?>

<h2 class="display-4">Página Atualizar Produtos</h2>





<form action="index.php?p=funcionarios&e=atualizar&id=<?php echo $funcionario->idFuncionario ?>" method="POST" enctype="multipart/form-data">



    <div class="caixa">

        <div class="mb-3">
            <label for="formFile" class="form-label">Foto:</label>
            <input class="form-control" type="file" name="fotoFuncionario" id="fotoFuncionario">
        </div>


        <div class="mb-3">
            <label for="nomeFuncionario" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario" placeholder="Nome do Funcionário::" value="<?php echo $funcionario->nomeFuncionario ?>">
        </div>


        <div class="mb-3">
            <label for="dataNascFuncionario" class="form-label">Data de Nascimento:</label>
            <input type="text" class="form-control" name="dataNascFuncionario" id="dataNascFuncionario" placeholder="Formato: (ano-mês-dia)" value="<?php echo $funcionario->dataNascFuncionario ?>">
        </div>

        <div class="mb-3">
            <label for="cargoFuncionario" class="form-label">Cargo:</label>
            <input type="text" class="form-control" name="cargoFuncionario" id="cargoFuncionario" value="<?php echo $funcionario->cargoFuncionario ?>">
        </div>

        <div class="mb-3">
            <label for="emailFuncionario" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="emailFuncionario" id="emailFuncionario" value="<?php echo $funcionario->emailFuncionario ?>">
        </div>

        <div class="mb-3">
            <label for="senhaFuncionario" class="form-label">Senha:</label>
            <input type="text" class="form-control" name="senhaFuncionario" id="senhaFuncionario" value="<?php echo $funcionario->senhaFuncionario ?>">
        </div>

        <div class="mb-3">
            <label for="nivelFuncionario" class="form-label">Nível:</label>
            <input type="text" class="form-control" name="nivelFuncionario" id="nivelFuncionario" value="<?php echo $funcionario->nivelFuncionario ?>">
        </div>

        <div class="mb-3">
            <label for="telefoneFuncionario" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneFuncionario" id="telefoneFuncionario" value="<?php echo $funcionario->telefoneFuncionario ?>">
        </div>

        <div class="mb-3">
            <label for="admissaoFuncionaro" class="form-label">Data de Admissão:</label>
            <input type="text" class="form-control" name="admissaoFuncionaro" id="admissaoFuncionaro" placeholder="Formato: (ano-mês-dia)" value="<?php echo $funcionario->admissaoFuncionaro ?>">
        </div>


        <div class="mb-3">
            <label for="statusFuncionario" class="form-label">Status:</label>
            <input type="text" class="form-control" name="statusFuncionario" id="statusFuncionario" placeholder="ATIVO ou DESATIVADO?" value="<?php echo $funcionario->statusFuncionario ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="AtualizarBtn" >Atualizar Produto</button>
        </div>
    </div>


</form>