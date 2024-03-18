<?php 
if (isset($_POST['nomeUsuario'])) {
    $nomeUsuario = $_POST['nomeUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    $dataNascUsuario = $_POST['dataNascUsuario'];
    $telefoneUsuario = $_POST['telefoneUsuario'];
    $enderecoUsuario = $_POST['enderecoUsuario'];
    $cepUsuario = $_POST['cepUsuario'];
    $statusUsuario = $_POST['statusUsuario'];

    require_once('class/usuarios.php');

    $usuario = new UsuarioClass();

    $usuario->nomeUsuario = $nomeUsuario;
    $usuario->emailUsuario = $emailUsuario;
    $usuario->senhaUsuario = $senhaUsuario;
    $usuario->dataNascUsuario = $dataNascUsuario;
    $usuario->telefoneUsuario = $telefoneUsuario;
    $usuario->enderecoUsuario = $enderecoUsuario;
    $usuario->cepUsuario = $cepUsuario;
    $usuario->statusUsuario = $statusUsuario;

    $usuario->Cadastrar();
}
?>

<div class="col-md-12">

    <div class="cardi card-info">
        <div class="cardi-header">
            <h3 class="cardi-title"> Cadastre Produto</h3>
        </div>

        <form action="index.php?p=clientes&e=cadastrar" method="POST" enctype="multipart/form-data">

            <div class="cardi-body">

                <div class="row">

                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="nomeUsuario" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" required placeholder="Nome:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emailUsuario" class="col-sm-2 col-form-label">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emailUsuario" name="emailUsuario" required placeholder="E-mail:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="senhaUsuario" class="col-sm-2 col-form-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="senhaUsuario" name="senhaUsuario" required placeholder="Senha:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dataNascUsuario" class="col-sm-2 col-form-label">Data de Nascimento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dataNascUsuario" name="dataNascUsuario" required placeholder="Data de Nascimento:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefoneUsuario" class="col-sm-2 col-form-label">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telefoneUsuario" name="telefoneUsuario" required placeholder="Telefone:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="enderecoUsuario" class="col-sm-2 col-form-label">Endereço:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="enderecoUsuario" name="enderecoUsuario" required placeholder="Endereço:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cepUsuario" class="col-sm-2 col-form-label">CEP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cepUsuario" name="cepUsuario" required placeholder="CEP:">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="statusUsuario">
                                    <option>Status</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVADO">DESATIVADO</option>
                                </select>
                            </div>
                        </div>


                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>