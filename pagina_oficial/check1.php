<?php
if (empty($_GET['Consulc'])) {
   // echo "hola";
}else{
  $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
  // creación de la conexión a la base de datos con pg_connect()
  $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
  $cl = $_GET['Consulc'];
  // echo $cl;
  $sql = "SELECT * FROM datos1 where id_datos = '".$cl."'";
 $res = pg_query($conexion,$sql)  or die ("Algo ha ido mal en la consulta a la base de datos");
 while ($row = pg_fetch_row($res)) {
   $reg['nombre'] = $row[1];
   $reg['rfc'] = $row[2];
   $reg['email'] = $row[3];
 }
$sql2 = "SELECT fecha_inicio,fecha_final,licencia,tiempo FROM datos1 where nombre = '".$reg['nombre']."' and rfc = '".$reg['rfc']."' and email='".$reg['email']."'";
$res2 = pg_query($conexion,$sql2)  or die ("Algo ha ido mal en la consulta a la base de datos");
// echo pg_num_rows($res2);
while ($rgs = pg_fetch_row($res2)) {
  $qwe[] = $rgs;
}
echo json_encode($qwe);
$rows = pg_num_rows($res2);

if (!$res2) {
  echo "102";
// }
//   if ($rows == 1) {
//     while ($row = pg_fetch_row($res2)) {
//       $reg['id'] = $row[0];
//       $reg['nom'] = $row[1];
//       $reg['rfc'] = $row[2];
//       $reg['mai'] = $row[3];
//       $reg['fci'] = $row[4];
//       $reg['fcf'] = $row[5];
//       $reg['lic'] = $row[6];
//       $reg['tim'] = $row[7];
//     }
//     echo json_encode($reg);
  }else {
    echo "103";
  }
}

?>
