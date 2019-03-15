<?php
$cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
// creación de la conexión a la base de datos con pg_connect()
$conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");

$sql= "SELECT distinct on (nombre) nombre,id_datos From datos";
//ejecutar sentencia sql con pg_connect
$result = pg_query($sql) or die("error query.". pg_last_error());

while($row = pg_fetch_array($result,null,PGSQL_ASSOC))//{  //$row2=pg_fetch_array($result2,null,PGSQL_ASSOC);
{
  $reg["id_datos"] = $row["id_datos"];
  $reg["nombre"] = $row["nombre"];
  $dat[] = $reg;
}

echo json_encode($dat);
?>
