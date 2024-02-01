<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsivo.css">
    <title>Adega do Cleitinho- Home</title>
</head>

<body>

    <?php require_once('conteudo/header.php'); ?>

    <main>

        <?php require_once('conteudo/buscar.php'); ?>

        <section class="site categorias">
            <h2>Categorias</h2>

            <div class="produtosCategorias">
                <div class="produtos">
                    <a href="produto.php?p=Energéticos">
                        <img src="./img/energeticos.png" alt="">
                        <h3>Energéticos</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Sucos">
                        <img src="./img/sucos.png" alt="">
                        <h3>Sucos</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Gelos">
                        <img src="./img/gelos.png" alt="">
                        <h3>Gelos</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Alcoólicas">
                        <img src="./img/alcolica.png" alt="">
                        <h3>Alcoólicas</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Cervejas">
                        <img src="./img/cervejas.png" alt="">
                        <h3>Cervejas</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Vinhos">
                        <img src="./img/vino.png" alt="">
                        <h3>Vinhos</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Energéticos">
                        <img src="./img/energeticos.png" alt="">
                        <h3>Energéticos</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Sucos">
                        <img src="./img/sucos.png" alt="">
                        <h3>Sucos</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Gelos">
                        <img src="./img/gelos.png" alt="">
                        <h3>Gelos</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Alcoólicas">
                        <img src="./img/alcolica.png" alt="">
                        <h3>Alcoólicas</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Cervejas">
                        <img src="./img/cervejas.png" alt="">
                        <h3>Cervejas</h3>
                    </a>
                </div>
                <div class="produtos">
                    <a href="produto.php?p=Vinhos">
                        <img src="./img/vino.png" alt="">
                        <h3>Vinhos</h3>
                    </a>
                </div>
            </div>
        </section>

        <section class="funciona wow animate__animated animate__fadeInUp">
            <h2>Como funciona?</h2>

            <div class="site estruturaFunciona">
                <div class="instrucao">
                    <img src="./img/delivery.png" alt="">
                    <div>
                        <h3>Faça seu pedido</h3>
                        <h4>Adicione suas escolhas ao carrinho.</h4>
                    </div>
                </div>


                <div class="instrucao">
                    <img src="./img/musica.png" alt="">
                    <h3>Ligue um Som!</h3>
                    <h4>Nossa equipe preparará seu pedido.</h4>
                </div>


                <div class="instrucao">
                    <img src="./img/aprecie.png" alt="">
                    <div>
                        <h3>Aprecie!</h3>
                        <h4>Cada gole, uma <br> experiência única. </h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="promocoes wow animate__animated animate__fadeInUp">

            <h2>Promoções</h2>

            <div class="site wow promocoesEstrutura animate__animated animate__pulse">
                <div class="cardPromocoes ">
                    <div>
                        <img src="./img/redbull.png" alt="">
                    </div>

                    <h3>RedBull</h3>
                    <h4>R$ 7,12</h4>
                    <div class="fundoComprar">
                        <a href="produto.php">Comprar</a>
                    </div>
                </div>
                <div class="cardPromocoes">
                    <div>
                        <img src="./img/guaraviton.png" alt="">
                    </div>
                    <h3>Guaraviton</h3>
                    <h4>R$ 2,99</h4>
                    <div class="fundoComprar">
                        <a href="produto.php">Comprar</a>
                    </div>
                </div>
                <div class="cardPromocoes">
                    <div>
                        <img src="./img/vinhopergola.png" alt="">
                    </div>
                    <h3>Vinho Pérgola</h3>
                    <h4>R$ 23,40</h4>
                    <div class="fundoComprar">
                        <a href="produto.php">Comprar</a>
                    </div>
                </div>
                <div class="cardPromocoes">
                    <div>
                        <img src="./img/jack.png" alt="">
                    </div>
                    <h3>Whiskey Jack Daniels</h3>
                    <h4>R$ 139,17</h4>
                    <div class="fundoComprar">
                        <a href="produto.php">Comprar</a>
                    </div>
                </div>
            </div>

            <button> <a href="produto.php">Veja nossos produtos!</a></button>
        </section>

    </main>

    <?php require_once('conteudo/rodape.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="./js/script.js"></script>


</body>

</html>