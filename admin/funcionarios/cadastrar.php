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
    $funcionario->fotoFuncionario = $arquivo;

    $funcionario->Cadastrar();
}
?>

<div class="col-md-12">

    <div class="cardi card-info">
        <div class="cardi-header">
            <h3 class="cardi-title"> Cadastre Funcionario</h3>
        </div>

        <form action="index.php?p=funcionarios&e=cadastrar" method="POST" enctype="multipart/form-data">

            <div class="cardi-bo">

                <div class="mb-3 foto-funcionario">
                    <label for="fotoFuncionario" class="form-label">Foto:</label>
                    <input type="file" class="form-control" id="fotoFuncionario" name="fotoFuncionario" style="display:none;">
                    <img src="../img/sem-foto.png" alt="Imagem Sem Foto" id="imgFoto">
                </div>

                <div class="col">

                    <div class=" nomeFuncionario">
                        <label for="nomeProduto" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" required="" placeholder="Nome do Funcionario:">
                        </div>
                    </div>

                    <div class=" dataNascFuncionario">
                        <label for="nomeProduto" class="col-sm-2 col-form-label">Data de Nascimento:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dataNascFuncionario" name="dataNascFuncionario" required="" placeholder="Data de Nascimento:">
                        </div>
                    </div>

                    <div class=" cargoFuncionario">
                        <select class="form-select " name="cargoFuncionario" id="seletor">
                            <option selected=""> Selecione o Cargo</option>
                            <option value="Sócio">Sócio</option>
                            <option value="Atendente">Atendente</option>
                            <option value="Gerente">Gerente</option>
                        </select>
                    </div>

                    <div class="emailFuncionario">
                        <label for="nomeProduto" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="emailFuncionario" name="emailFuncionario" required="" placeholder="Email:">
                        </div>
                    </div>

                    <div class=" senhaFuncionario">
                        <label for="nomeProduto" class="col-sm-2 col-form-label">Senha:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="senhaFuncionario" name="senhaFuncionario" required="" placeholder="Senha:">
                        </div>
                    </div>

                    <div class=" nivelFuncionario">
                        <select class="form-select" name="nivelFuncionario" id="seletor">
                            <option selected=""> Selecione o nível</option>
                            <option value="ADM">ADM</option>
                            <option value="comum">Comum</option>
                        </select>
                    </div>

                    <div class=" telefoneFuncionario">
                        <label for="nomeProduto" class="col-sm-2 col-form-label">Telefone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario" required="" placeholder="Telefone:">
                        </div>
                    </div>

                    <div class="admissaoFuncionario">
                        <label for="nomeProduto" class="col-sm-2 col-form-label">Data de Admissão:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="admissaoFuncionaro" name="admissaoFuncionaro" required="" placeholder="Data de Admissão:">
                        </div>
                    </div>


                    <div class="rowww">

                        <div class=" statusFuncionario">
                            <select class="form-select" name="statusFuncionario" id="seletor">
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