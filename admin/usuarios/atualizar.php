<?php 
$id = $_GET["id"];
require_once('class/usuarios.php');
$usuario = new UsuarioClass();

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





<form action="index.php?p=exercicios&e=atualizar&id=<?php echo $usuario->idUsuario ?>" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeUsuario" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeExercicio" id="nomeUsuario" placeholder="Nome do usuário" value="<?php echo $usuario->nomeUsuario ?>">
        </div>


        <div class="mb-3">
            <label for="descricaoExercicio" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="descricaoExercicio" id="descricaoExercicio" value="<?php echo $exercicio->descricaoExercicio ?>">
        </div>


        <div class="row">

            <div class="mb-3">
                <label for="grupoMuscularExercicio" class="form-label">Status:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="grupoMuscularExercicio" required>
                    <option value="<?php echo $exercicio->grupoMuscularExercicio ?>">
                        <?php echo $exercicio->grupoMuscularExercicio ?>
                    </option>
                    <option value="Peito">Peito</option>
                    <option value="Pernas">Pernas</option>
                    <option value="Bracos">Braços</option>
                    <option value="Abdômen">Abdômen</option>
                    <option value="Cardio">Cardio</option>
                </select>

            </div>




            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>


                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                                                                                                                    if ($exercicio->statusExercicio == 'ATIVO') {
                                                                                                                        echo 'checked';
                                                                                                                    }
                                                                                                                    ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Ativo
                        </label>
                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                                                                                                                    if ($exercicio->statusExercicio == 'DESATIVADO') {
                                                                                                                        echo 'checked';
                                                                                                                    }
                                                                                                                    ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Desativado
                        </label>
                    </div>



                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                                                                                                                    if ($exercicio->statusExercicio == 'INATIVO') {
                                                                                                                        echo 'checked';
                                                                                                                    }
                                                                                                                    ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Inativo
                        </label>
                    </div>

                </div>


                <div class="mb-3">
                    <label for="linkExercicio" class="form-label">Link:</label>
                    <input type="text" class="form-control" id="linkExercicio" name="linkExercicio" placeholder="Link do exercício" value="<?php echo $exercicio->linkExercicio?>">
                </div>

            </fieldset>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Atualizar Exercício</button>
            </div>

        </div>

    </div>

</form>