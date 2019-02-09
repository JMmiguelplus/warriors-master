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
//if(empty($nombre) or empty($rfc) or  empty($email)){
  //echo "Llena campos";
$pro = $_POST["producto"];
$des = $_POST["descripcion"];

//} else {//Genera Codigo de 8 digitos de forma aleatoria
$list = $_POST['listac'];
echo $list."<br>";

$fecha = $_POST["fecha"];
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
  $consulta = pg_query($conexion, "SELECT * FROM datos1 where id_datos=".$list);
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

if($demo = 'Tipo de licencia' or $licencia ='Tipo de licencia' or $tiempo = '0'){
  echo "ESTOS CAMPOS ESTAN VACIOS";
}else{
  echo "CAMPOS LLENOS CORRECTAMENTE";
}

} else {

$nombre = $_POST["nombre"];
$rfc= $_POST["rfc"];
$email= $_POST["email"];
}
//Guarda valor de la funcion que genera codigo de 8 digitos
$codigo = generarCodigo(15);

$fi = $fecha.' ';

if($demo == 30 or $demo == 40 or $demo == 90){
  $dat="days";
  $fecha = date_create($fecha);
  date_add($fecha,date_interval_create_from_date_string($demo.' '.$dat));
  $ff = date_format($fecha,'Y-m-d').' ';
  $tiempo = $demo;
} else{
  $dat= "years";
  $fecha = date_create($fecha);
  date_add($fecha,date_interval_create_from_date_string($tiempo.' '.$dat));
  $ff = date_format($fecha,'Y-m-d').' ';
}

//concatenacion de letras para generar el codigo
$cod = 'WL-'.$codigo.date("Y");

$insertLicence = "INSERT INTO datos1(nombre,rfc, email, producto, fecha_inicio,fecha_final,licencia,tiempo,descripcion,codigo) VALUES ('$nombre','$rfc','$email','$pro','$fi','$ff','$licencia','$tiempo','$des','$cod')";


//header('Location: formulario.php');

//echo "<br><br>".$insertLicence;
//Insersiones a BD
$var1 = pg_query($conexion, $insertLicence) or die ("Algo ha ido mal en la consulta a la base de datos");

pg_close($conexion);

////ENVIO DEL FORMALIRO POR CORREO
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

$mail->AddAddress('lukejimenez1@gmail.com');
$mail->Subject = "Registro de Licencia";

$mail->Body .= "<h1>Datos</h1>";
$mail->Body .= "Nombre:".$nombre."<br>";
$mail->Body .= "RFC:".$rfc."<br>";
$mail->Body .= "Email:".$email."<br>";
$mail->Body .= "Fecha de Inicio:".$fi."<br>";
$mail->Body .= "Fecha de Final:".$ff."<br>";
$mail->Body .= "Tipo de licencia:".$licencia."<br>";
$mail->Body .= "Codigo de la licencia:".$cod."<br>";

$mail->IsHTML(true);

if($mail->Send()){
  ?>
<script>
  console.log('Enviado');
</script>
  <?
} else {
  ?>
<script>
  console.log('nel');
</script>
  <?
}
} catch(Exception $e){
 echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

$id = round(microtime(true) * 1000);

$contenido = md5($nombre . "|" . $licencia);

$archivo = fopen("licencia_warriors_" . $id . ".txt", "a") or die ("Error de captura");

fwrite($archivo,PHP_EOL ."$contenido");
fwrite($archivo, $contenido . PHP_EOL);

fclose($archivo);

header('Location: index.php');

//
// header("location: formulario.php");
?>
