<?php

//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;


if (isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mens = $_POST['mens'];
    $assunto = 'Adega cleitinho';

    require_once('admin/class/email.php');

    $contato = new contatoEmail();

    $contato->nomeContato = $nome;

    $contato->emailContato = $email;

    $contato->telContato = $fone;

    $contato->assuntoContato = $mens;


    $contato->Inserir();


    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');

    //Crie uma instância; passar `true (verdadeiro)
    $mail = new PHPMailer(true);

    try {

        //Configurações do servidor

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita saída de depuração detalhada
        $mail->isSMTP(); //Enviar usando SMTP
        $mail->Host = 'smtp.hostinger.com'; //Defina o servidor SMTP para enviar
        $mail->SMTPAuth = true; //Habilitar autenticação SMTP
        $mail->Username = 'contato@adegacleitinho.smpsistema.com.br'; //SMTP nome de usuário
        $mail->Password = 'Senac@Adega01'; //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Habilitar criptografia TLS implícita
        $mail->Port = 465; //Porta TCP para conexão


        //Destinatários
        $mail->setFrom('contato@adegacleitinho.smpsistema.com.br', $assunto); // Quem dispara o email
        $mail->addAddress('gl6772344@gmail.com'); //Adicionar um destinatário

        //Conteúdo do email

        $mail->isHTML(true); //Defina o formato do e-mail para HTML
        $mail->Subject = $assunto;

        //Conteúdo HTML
        $mail->Body = "        
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens";

        //Sem formatação HTML

        $mail->AltBody = "

            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens ";


        $mail->send();
        // echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        // echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }
}


?>


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


        <section class="maps">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.4931018576895!2d-46.28625477867535!3d-23.47874216069198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7be20e8a0afd%3A0xac5e04887dd5bd76!2sR.%20Manoel%20Preto%2C%20100%20-%20Vila%20Augusta%2C%20Itaquaquecetuba%20-%20SP%2C%2008593-130!5e0!3m2!1spt-BR!2sbr!4v1696428025534!5m2!1spt-BR!2sbr" width="600" height="700" style="border:20;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <div class="corTudo">
            <section class="site">

                <div class="todoContato">


                    <div class="contatoN wow animate__animated animate__fadeInUp">
                        <h2>Enviar meu pedido</h2>
                        <h3 id="frete" style="color: white;text-align: center;">+R$ 5,00 de frete </h3>
                        <h4>
                            <?php
                            if ($ok == 1) {
                                echo $nome . ", seu pedido foi solicitado !";
                            } else if ($ok == 2) {
                                echo $nome . "Não foi possível enviar seu pedido. tente mais tarde !";
                            }
                            ?>
                        </h4>


                        <div class="caixas1 wow animate__animated animate__fadeInUp">
                            <form action="#" method="POST" onsubmit="verificar()">
                                <div class="caixas">
                                    <div>
                                        <label for="nome">Nome :</label>
                                        <input type="text" name="nome" id="nome" placeholder="Informe seu nome : " required>
                                    </div>

                                    <div>
                                        <label for="email">E-mail :</label>
                                        <input type="email" name="email" id="email" placeholder="Informe seu e-mail : " required>
                                    </div>

                                    <div>
                                        <label for="fone">Telefone :</label>
                                        <input type="tel" name="fone" id="fone" placeholder="Informe seu telefone : " maxlength="15" onkeyup="handlePhone(event)">
                                    </div>
                                </div>

                                <div class="mens ">

                                    <div>
                                        <label for="mens">Mensagem</label>
                                        <textarea name="mens" id="mens" cols="42" rows="5" placeholder="Deixei sua Mensagem :"></textarea>
                                    </div>
                                </div>
                                <div class="butao ">
                                    <input type="submit" value="Enviar por E-mail">


                                </div>
                            </form>
                        </div>
                    </div>
            </section>
        </div>



    </main>

    <?php require_once('conteudo/rodape.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="./js/script.js"></script>


</body>