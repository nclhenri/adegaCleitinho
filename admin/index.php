<?php
$paginaAtual = @$_GET['p'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header>
        <div class="site">
            <div class="header ">
                <div class="logoTamanho  wow animate__animated animate__fadeInUp">
                    <img class=" wow animate__animated animate__fadeInUp" src="../img/logo.png" alt="">
                </div>

                <div class="navegacao">
                    <ul>

                        <li><a href="index.php?p=produtos" class="<?php echo (($paginaAtual == 'produtos') || ($paginaAtual == '')) ? 'menuAtivo' : '' ?>">Produtos</a></li>
                        <li><a href="index.php?p=funcionarios" class="<?php echo ($paginaAtual == 'funcionarios') ? 'menuAtivo' : '' ?>">Funcionários</a></li>
                        <li><a href="index.php?p=clientes" class="<?php echo ($paginaAtual == 'clientes') ? 'menuAtivo' : '' ?>">Clientes</a></li>
                        <li><a href="index.php?p=fornecedores" class="<?php echo ($paginaAtual == 'fornecedores') ? 'menuAtivo' : '' ?>">Fornecedores</a></li>
                        <li><a href="index.php?p=compras" class="<?php echo ($paginaAtual == 'compras') ? 'menuAtivo' : '' ?>">Compras</a></li>
                        <li><a href="index.php?p=email" class="<?php echo ($paginaAtual == 'email') ? 'menuAtivo' : '' ?>">E-mail</a></li>
                        <li><a href="index.php?p=ajuda" class="<?php echo ($paginaAtual == 'ajuda') ? 'menuAtivo' : '' ?>">Ajuda & Suporte</a></li>
                    </ul>
                </div>


                <div class="user">
                    <a href="formLogin.php">
                        <img class=" wow animate__animated animate__fadeInUp" src="../img/user.png" alt="">
                    </a>
                </div>
                </nav>

                <a href="formLogin.php">
                    <img class=" wow animate__animated animate__fadeInUp" src="../img/user.png" alt="">
                </a>

            </div>
        </div>
    </header>

    <main>

        <h1><?php
            switch ($paginaAtual) {
                case 'produtos':
                    echo 'Produtos';
                    break;
                case 'funcionarios':
                    echo 'Funcionários';
                    break;
                case 'clientes':
                    echo 'Clientes';
                    break;
                case 'fornecedores':
                    echo 'Fornecedores';
                    break;
                case 'compras':
                    echo 'Compras';
                    break;
                case 'email':
                    echo 'E-mail';
                    break;
                case 'ajuda':
                    echo 'Ajuda & Suporte';
                    break;

                default:
                    echo 'Produtos';
                    break;
            }
            ?>
        </h1>

        <div class="boxx">
            <?php
            switch ($paginaAtual) {
                case 'produtos':
                    require_once('produtos/listar.php');
                    break;
                case 'funcionarios':
                    echo 'Funcionários';
                    break;
                case 'clientes':
                    require_once('usuarios/usuario.php');
                    break;
                case 'fornecedores':
                    echo 'Fornecedores';
                    break;
                case 'compras':
                    echo 'Compras';
                    break;
                case 'email':
                    require_once('contato/email.php');
                    break;
                case 'ajuda':
                    echo 'Ajuda & Suporte';
                    break;

                default:
                    echo 'Produtos';
                    break;
            }
            ?>
        </div>
    </main>

    <footer>

        <section class="desenvolvido wow animate__animated animate__fadeInUp">
            <h2>Desenvolvido por LekDev</h2>
        </section>
        <section class="nomes wow animate__animated animate__fadeInUp">
            <h2>Gustavo Lima e Nicolas Henrique</h2>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>