<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("./vendor/autoload.php");

$mail = new PHPMailer(true);

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];

$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'maadgmr@gmail.com';
$mail->Password   = '190601mad';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;

$mail->setFrom('maadgmr@gmail.com', 'Test IO');
$mail->addAddress('rh@tinpix.com.br', 'RH Tinpix');
$mail->addReplyTo($email, $nome);

$mail->isHTML(true);
$mail->Subject = 'Inscricao no Processo!';
$mail->Body    = '
    <center>
    <div style="width:45%;color:black;text-decoration:none;">
    <img width="300px" src="https://test.io/wp-content/uploads/2019/02/testIO-logo-rgb-2.png" alt="">
    <h2>Obrigado pela inscrição!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
    <br>

    <b>Nome</b>:' . $nome . '<br>
    <b>Email</b>:' . $email . '<br>
    <b>Telefone</b>:' . $telefone . '<br>

    <br><br><br><br>

    <a href="#" style="text-decoration:none;color: #fff;background-color: #007bff;border-color: #007bff;padding: .5rem;font-size: 1.25rem;line-height: 1.5;border-radius: .3rem;">Voltar para o site</a>
    <br><br><br>
    </div>
    </center>
';

$mail->send();

header('Content-Type: application/json');
echo json_encode(['status' => 'ok']);