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

$insertLicence = "INSERT INTO datos1(nombre,rfc, email, fecha_inicio,fecha_final,licencia,tiempo,codigo) VALUES ('$nombre','$rfc','$email','$fi','$ff','$licencia','$tiempo','$cod')";

//header('Location: formulario.php');

echo "<br><br>".$insertLicence;
//Insersiones a BD
//$var1 = pg_query($conexion, $insertLicence) or die ("Algo ha ido mal en la consulta a la base de datos");

pg_close($conexion);
//}
//$to = $email;
//$subject = 'Codigo de Validacion Warriors Licences';
//$message = '
//    <html>
//    <head>
//        <title>Codigo de Validacion</title>
//    </head>
//        <body>
//        <h1>Hola, para poder ingresar y visualizar los detalles de su licencia podra verificarlo con el codigo que se le proporciona acontinuacion:</h1>
//        <br>
//        <center><p><b><?php $codigo</b></p></center>
//        </body>
//    </html>';

//$to = $email;
//$subject = 'Codigo de Validacion Warriors Licences';
//$message = '
//    <html>
//    <head>
//        <title>Codigo de Validacion</title>
//    </head>
//        <body>
//        <h1>Hola, para poder ingresar y visualizar los detalles de su licencia podra verificarlo con el codigo que se le proporciona acontinuacion:</h1>
//        <br>
//        <center><p><b><?php $codigo</b></p></center>
//        </body>
//    </html>';


//mail($to, $subject, $message);

//$id = round(microtime(true) * 1000);

//$contenido = md5($nombre . "|" . $licencia);

//$archivo = fopen("licencia_warriors_" . $id . ".txt", "a") or die ("Error de captura");

//fwrite($archivo,PHP_EOL ."$contenido");
//fwrite($archivo, $contenido . PHP_EOL);

//fclose($archivo);

//header('Location: index.php');


//header("location: formulario.php");
?>