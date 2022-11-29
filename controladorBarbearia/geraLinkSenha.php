<?php

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

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
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      //Email cliente
      $mail->Username = $email;
      $mail->Password = '123';
      $mail->Port = 587;

      // cliente
      $mail->setFrom($email);
      // cliente
       $mail->addAddress($email);

      $mail->isHTML(true);
      $mail->Subject = '<h3>Código para a redefinição de senha</h3>';
      $mail->Body = 'Chegou o email';
      $mail->AltBody = 'chegou sem html';

      if($mail->send()){
        echo 'Email enviado com sucesso';
      }else{
        echo 'Email não enviado';
      }

} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";

}

