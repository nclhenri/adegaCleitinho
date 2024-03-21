<?php
$id = $_GET["id"];
require_once('class/usuarios.php');
$usuario = new UsuarioClass($id);

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

    $usuario->Atualizar();
}
?>

<h2 class="display-4">Página Atualizar Clientes</h2>





<form action="index.php?p=clientes&e=atualizar&id=<?php echo $usuario->idUsuario ?>" method="POST" enctype="multipart/form-data">



    <div class="caixa">
        <div class="mb-3">
            <label for="nomeUsuario" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" placeholder="Nome do usuário" value="<?php echo $usuario->nomeUsuario ?>">
        </div>


        <div class="mb-3">
            <label for="emailUsuario" class="form-label">Email:</label>
            <input type="text" class="form-control" name="emailUsuario" id="emailUsuario" value="<?php echo $usuario->emailUsuario ?>">
        </div>

        <div class="mb-3">
            <label for="senhaUsuario" class="form-label">Senha:</label>
            <input type="text" class="form-control" name="senhaUsuario" id="senhaUsuario" value="<?php echo $usuario->senhaUsuario ?>">
        </div>

        <div class="mb-3">
            <label for="dataNascUsuario" class="form-label">Data Nascimento:</label>
            <input type="text" class="form-control" name="dataNascUsuario" id="dataNascUsuario" value="<?php echo $usuario->dataNascUsuario ?>">
        </div>

        <div class="mb-3">
            <label for="telefoneUsuario" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneUsuario" id="telefoneUsuario" value="<?php echo $usuario->telefoneUsuario ?>">
        </div>

        <div class="mb-3">
            <label for="enderecoUsuario" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="enderecoUsuario" id="enderecoUsuario" value="<?php echo $usuario->enderecoUsuario ?>">
        </div>

        <div class="mb-3">
            <label for="cepUsuario" class="form-label">CEP:</label>
            <input type="text" class="form-control" name="cepUsuario" id="cepUsuario" value="<?php echo $usuario->cepUsuario ?>">
        </div>

        <div class="mb-3">
            <label for="statusUsuario" class="form-label">Status:</label>
            <input type="text" class="form-control" name="statusUsuario" id="statusUsuario" value="<?php echo $usuario->statusUsuario ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="AtualizarBtn">Atualizar Cliente</button>
        </div>
    </div>


</form>