<?php
require_once('class/funcionario.php');
$funcionario = new funcionarioClass();
$lista = $funcionario->ListarFuncionario();
?>





<div class="ajusteTabela ">
    <div class="novoCliente">
        <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&e=cadastrar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            Novo funcionario
        </a>
    </div>
    <table class="table table-bordered border-primary">

        <thead>
            <tr>
                <th>Id </th>
                <th>Nome </th>
                <th>Data de Nascimento </th>
                <th>cargo </th>
                <th>Email </th>
                <th>Senha </th>
                <th>Nivel</th>
                <th>Telefone</th>
                <th>Foto</th>
                <th>Status</th>
                <th>Atualizar</th>
                <th>Desativar</th>

            </tr>

        </thead>
        <tbody>
            <?php foreach ($lista as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idFuncionario']; ?></td>

                    <td><?php echo $linha['nomeFuncionario']; ?></td>

                    <td><?php echo $linha['dataNascFuncionario']; ?></td>

                    <td><?php echo $linha['cargoFuncionario']; ?></td>

                    <td><?php echo $linha['emailFuncionario']; ?></td>

                    <td><?php echo $linha['senhaFuncionario']; ?></td>

                    <td><?php echo $linha['nivelFuncionario']; ?></td>

                    <td><?php echo $linha['telefoneFuncionario']; ?></td>

                    <td><img src="../img/<?php echo $linha['fotoFuncionario'] ?>" alt="<?php echo $linha['nomeFuncionario']?>"></td>

                    <td><?php echo $linha['statusFuncionario']; ?></td>


                    <td> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&e=atualizar&id=<?php echo $linha['idFuncionario'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                            Atualizar
                        </a>
                    </td>
                    <td> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&e=desativar&id=<?php echo $linha['idFuncionario'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg>
                            Desativar
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>

</div>