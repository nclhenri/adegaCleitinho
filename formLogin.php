<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsivo.css">

</head>

<body>
    <form action="" method="post">
        <a href="home.php"><svg class="sair" xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
            </svg></a>

        <div class="formulario">
            <div class="fundo">
                <div class="imglogoForm">
                    <img src="img/user.png" alt="">
                </div>
                <div class="form-floating mb-5">
                    <input type="email" class="form-control" name="emailLogin" id="emaillogin" placeholder="name@example.com" required>
                    <label for="floatingInput">Email :</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="password" class="form-control" name="senhaLogin" id="senhaLogin" placeholder="Password" required>
                    <label for="floatingPassword">Senha :</label>
                </div>
                <div class="btnlogin">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </form>



    </div>






    <footer>
        <?php require_once('conteudo/rodape.php'); ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>