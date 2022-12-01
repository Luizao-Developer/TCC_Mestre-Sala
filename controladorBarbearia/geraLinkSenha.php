<?php

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$numeros = rand(1,4000);

$link = "/xampp/htdocs/TCC_Mestre-Sala/view_barbearia/MSnovaSenha.php";
$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

    $email = $_POST['email'];

    $sql = "SELECT Email FROM tbbarbearia WHERE Email = '{$email}'";
    $resulta = mysqli_query($conexao, $sql);

    $encontrou = mysqli_num_rows($resulta);

    if($encontrou == 1){
          echo "Email encontrado";
     }else{
    //mail($email, "testando","");
         echo "Email nao encontrado";
     }

     try {
    
    

      //CÓDIGOS PARA ENVIO DE EMAIL PARA O CLIENTE
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        //Email cliente
        $mail->Username = 'b1b583abd450eb';
        $mail->Password = 'ac1eba20c389a1';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525;
  
        // cliente
        $mail->setFrom('mestresala@ms.com', 'Mestre Sala');
        // cliente
         $mail->addAddress($email);
  
        $mail->isHTML(true);
        $mail->Subject = 'Email enviando para vc';
        $mail->Body = "<h2>Acesse o link abaixo e gere uma nova senha</h2>
        <form action='$link' method='post'>
        <input type='hidden' name='email' id='email' value='$email'>
        <h1><a type='submit' href='$link'> Gerar nova senha</a></h1>
        </form>";
        $mail->AltBody = 'chegou sem html';
  
        if($mail->send()){
          echo 'Email enviado com sucesso';
        }else{
          echo 'Email não enviado';
        }
  
  } catch (Exception $e) {
      echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
  
  }
  
  