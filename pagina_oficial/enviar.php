<?php
 
 include 'PHPMailer/class.phpmailer.php';
 include 'PHPMailer/class.smtp.php';

 $mail = new PHPMailer();


try {
 $mail->Username = "warlab2019@gmail.com";
 $mail->Password = "WReporter19";

 $mail->SMTPSecure = "ssl";
 $mail->Host = "smtp.gmail.com";
 $mail->Port = 465;
 $mail->isSMTP();
 $mail->SMTPAuth = true;

 $mail->setFrom($mail->Username,'Licencias Warriors');

 $mail->AddAddress('migue_luke@gmail.com');
 $mail->Subject = "Registro de Licencia";

 $mail->Body .= "<h1>Datos</h1>";
 $mail->Body .= $nombre = $_POST['nombre'];
 $mail->Body .= $rfc = $_POST['rfc'];
 $mail->Body .= $email = $_POST['email'];
 $mail->Body .= $fecha = $_POST['fecha'];
 $mail->Body .= $licencia = $_POST['licencia'];




 $mail->IsHTML(true);

 if($mail->Send()){
   echo "Enviado";
 } else {
   echo "Error";
 }
} catch(Exception $e){
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
