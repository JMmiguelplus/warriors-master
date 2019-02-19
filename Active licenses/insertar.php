<?php
// Datos de la base de datos
$cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
// creación de la conexión a la base de datos con pg_connect()
$conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");

$pro = $_POST["producto"];
$des = $_POST["descripcion"];
$list = $_POST['listac'];
$fecha = $_POST["fecha"];
$tiempo = $_POST["tiempo"];
$licencia = $_POST["licencia"];
$nombre = $_POST["nombre"];

?>
