<?php
if (empty($_POST['Consulc'])) {
   //echo "hola";
}else{
  $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
  // creación de la conexión a la base de datos con pg_connect()
  $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
  $cl = $_POST['Consulc'];
  // echo $cl;
  $sql = "SELECT * FROM datos1 where id_datos = '".$cl."'";
 $res = pg_query($conexion,$sql)  or die ("Algo ha ido mal en la consulta a la base de datos");
 while ($row = pg_fetch_row($res)) {
   $reg['nombre'] = $row[1];
   $reg['rfc'] = $row[2];
   $reg['email'] = $row[3];
 }
$sql2 = "SELECT * FROM datos1 where nombre = '".$reg['nombre']."' and rfc = '".$reg['rfc']."' and email='".$reg['email']."'";
$res2 = pg_query($conexion,$sql2)  or die ("Algo ha ido mal en la consulta a la base de datos");
// echo pg_num_rows($res2);
while ($rgs = pg_fetch_row($res2)) {
  $qwe[] = $rgs;
}
echo $QW = json_encode($qwe);

$rows = pg_num_rows($res2);
  if ($rows >= '1') {
    // while ($row = pg_fetch_row($res2)) {
    //   $reg['fci'] = $row[0];
    //   $reg['fcf'] = $row[1];
    //   $reg['lic'] = $row[2];
    //   $reg['tim'] = $row[3];
    // }
    //echo json_encode($reg);
  } else {
    echo "103";
  }
  if (!$res) {
    echo "102";
  }
}

?>
