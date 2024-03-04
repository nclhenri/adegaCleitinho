<?php
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
        throw new Exception('Error' . $arquivo['error']);
    }
    if (move_uploaded_file($arquivo['tmp_name'], '../img/funcionario' . $arquivo['name'])) {
        $fotoFuncionario = 'funcionario/' . $arquivo['name']; //funcionario/nicolas.png
    } else {
        throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
    }

    require_once('class/funcionario.php');

    $funcionario = new funcionarioClass();

    $funcionario->nomeFuncionario = $nomeFuncionario;
    $funcionario->dataNascFuncionario = $dataNascFuncionario;
    $funcionario->cargoFuncionario = $cargoFuncionario;
    $funcionario->emailFuncionario = $emailFuncionario;
    $funcionario->senhaFuncionario = $senhaFuncionario;
    $funcionario->nivelFuncionario = $nivelFuncionario;
    $funcionario->telefoneFuncionario = $telefoneFuncionario;
    $funcionario->admissaoFuncionaro = $admissaoFuncionaro;
    $funcionario->statusFuncionario = $statusFuncionario;
    $funcionario->fotoFuncionario = $fotoFuncionario;

    $funcionario->Cadastrar();
}
?>

<div class="col-md-12">

    <div class="cardi card-info">
        <div class="cardi-header">
            <h3 class="cardi-title"> Cadastre Funcionario</h3>
        </div>

        <form action="index.php?p=funcionarios&e=cadastrar" method="POST" enctype="multipart/form-data">

            <div class="cardi-body">

                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto:</label>
                        <input class="form-control" type="file" name="fotoFuncionario" id="fotoFuncionario">
                    </div>

                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" required="" placeholder="Nome do Funcionario:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Data de Nascimento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dataNascFuncionario" name="dataNascFuncionario" required="" placeholder="">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 offset-md-2">
                            <select class="form-select col-sm-2" name="cargoFuncionario">
                                <option selected=""> Selecione o Cargo</option>
                                <option value="Sócio">Sócio</option>
                                <option value="Atendente">Atendente</option>
                                <option value="Gerente">Gerente</option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emailFuncionario" name="emailFuncionario" required="" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="senhaFuncionario" name="senhaFuncionario" required="" placeholder="">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 offset-md-2">
                            <select class="form-select col-sm-2" name="nivelFuncionario">
                                <option selected=""> Selecione o nível</option>
                                <option value="ADM">ADM</option>
                                <option value="comum">Comum</option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario" required="" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Data de Admissão:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="admissaoFuncionaro" name="admissaoFuncionaro" required="" placeholder="">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="statusFuncionario">
                                    <option selected=""> Selecione o Status</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVADO">DESATIVADO</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Cadastrar Funcionario</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>