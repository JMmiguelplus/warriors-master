<?php

// Datos de la base de datos
$cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
// creación de la conexión a la base de datos con pg_connect()
$conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");

//Genera Codigo de 8 digitos de forma aleatoria
function generarCodigo($longitud)
{
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern) - 1;

    for ($i = 0; $i < $longitud; $i++) $key .= $pattern
    {
    mt_rand(0, $max)
    };
    return $key;
}

$pro = $_POST["producto"];
$pro= strtoupper($pro);
$des = $_POST["descripcion"];
$des= strtoupper($des);
//Genera Codigo de 8 digitos de forma aleatoria
$list = $_POST['listac'];

if (isset($_POST["demo"])) {
  $demo = $_POST["demo"];
} else {
  $demo = 0;
}
if (isset($_POST["tiempo"])){
  $tiempo = $_POST["tiempo"];
} else {
  $tiempo = 0;
}
$licencia = $_POST["licencia"];

if ($list > 0) {
  $consulta = pg_query($conexion, "SELECT * FROM datos where id_datos=".$list);
  while($row = pg_fetch_array($consulta,null,PGSQL_ASSOC))
  {
    $reg["id_datos"] = $row["id_datos"];
    $reg["nombre"] = $row["nombre"];
    $reg["rfc"] = $row["rfc"];
    $reg["email"] = $row["email"];
    $dat[] = $reg;
  }
  echo json_encode($dat)."<br>";
  $nombre = $dat[0]["nombre"];
  $rfc= $dat[0]["rfc"];
  $email= $dat[0]["email"];

if($demo ='Tipo de licencia' or $licencia ='Tipo de licencia' or $tiempo = '0'){
  echo "ESTOS CAMPOS ESTAN VACIOS";
}else{
  echo "CAMPOS LLENOS CORRECTAMENTE";
}

} else {

$nombre = $_POST["nombre"];
$nombre = strtoupper($nombre);
$rfc= $_POST["rfc"];
$rfc= strtoupper($rfc);
$email= $_POST["email"];
}
//Guarda valor de la funcion que genera codigo de 15 digitos
$codigo = generarCodigo(15);

//concatenacion de letras para generar el codigo
$cod = 'WL-'.$codigo.date("Y");

$dia = date('d-'.'m-'.'Y');
$insertLicence = "INSERT INTO datos(nombre,rfc, email, producto,fecha_registro,licencia,tiempo,descripcion,codigo) VALUES ('$nombre','$rfc','$email','$pro','$dia','$licencia','$tiempo','$des','$cod')";


//header('Location: formulario.php');

//Insersiones a BD
$var1 = pg_query($conexion, $insertLicence) or die ("Algo ha ido mal en la consulta a la base de datos");

pg_close($conexion);

////ENVIO DEL FORMALIRO POR CORREO
include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';

$mail = new PHPMailer();
$meil = new PHPMailer();


try {
$mail->Username = "desarrollo7@warriorslabs.com";
$mail->Password = "D3s@rr01107WL2018";

$mail->SMTPSecure = "ssl";
$mail->Host = "linx4.dscorp.com.mx";
$mail->Port = 465;
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->setFrom($mail->Username,'Licencias Warriors');

$mail->AddAddress('dsoporte3@warriorslabs.com');//DISTANATARIO
$mail->Subject = "Registro de Licencia";
$mail->Body .= "<h1>Datos del Registro</h1>";
$mail->Body .= "Nombre:".$nombre."<br>";
$mail->Body .= "RFC:".$rfc."<br>";
$mail->Body .= "Correo:".$email."<br>";
$mail->Body .= "Fecha de Registro:".$dia."<br>";
$mail->Body .= "Tipo de licencia:".$licencia."<br>";
$mail->Body .= "Tiempo de contrato:".$tiempo."<br>";
$mail->Body .= "Producto:".$pro."<br>";
$mail->Body .= "Codigo de la licencia:".$cod."<br>";

$meil->Username = "desarrollo7@warriorslabs.com";
$meil->Password = "D3s@rr01107WL2018";

$meil->SMTPSecure = "ssl";
$meil->Host = "linx4.dscorp.com.mx";
$meil->Port = 465;
$meil->isSMTP();
$meil->SMTPAuth = true;

$meil->setFrom($meil->Username,'Licencias Warriors');

$meil->AddAddress($email);//DISTANATARIO

$meil->IsHTML(true);
$meil->Subject = "Registro de Licencia";

$meil->MsgHTML('<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">//NOTA: LAS IMAGENES SE VERAN REFLEJADAS EN EL CORREO CUANDO EL PROYECTO YA ESTE EN EL SERVIDOR
				<tr>
					<td align="center" style="padding: 0px 0 40px 0;">
						<img src="../pagina_oficial/img/email.jpg" width="100%" alt="" style="display: block;">
					</td>
				</tr>
				<tr>
				   <td style="padding: 60px 50px 60px 50px;color:#000;">
						<h1>Bienvenido Warriors labs!</h1><br>
						Gracias por confiar en nosotros, comunicate para validar tu registro
						<br><br>
					</td>
				</tr>
				<tr>
					<td align="center" style="padding: 40px 0 0px 0;">
						<img src="../pagina_oficial/img/footer.png" width="100%" style="display: block;">
					</td>
				</tr>
				</table>'
			);
  if($mail->send() and $meil->send()){
    echo 'Enviado';
  } else {
    echo 'Fallo';
  }
} catch(Exception $e){
 echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
 echo 'Message could not be sent. Mailer Error: ', $meil->ErrorInfo;
}

$id = round(microtime(true) * 1000);

$contenido = md5($nombre . "|" . $licencia);

$archivo = fopen ("../pagina_oficial/Archivostxt/licencia_warriors_" . $id . ".txt", "a") or die ("Error de captura");

fwrite($archivo,PHP_EOL ."$contenido");
fwrite($archivo, $contenido . PHP_EOL);

fclose($archivo);

header('Location: index.php?modal=1');

?>
