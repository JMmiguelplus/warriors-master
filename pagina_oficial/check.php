<?php
if (empty($_POST['licencia'])) {
  echo "101";
}else{
  $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
  // creación de la conexión a la base de datos con pg_connect()
  $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
  $lic = $_POST['licencia'];
  $sql = "SELECT * FROM datos1 where codigo = '".$lic."'";
  $res = pg_query($conexion,$sql)  or die ("Algo ha ido mal en la consulta a la base de datos");
  $rows = pg_num_rows($res);

if (!$res) {
  echo "102";
}
  if ($rows == 1) {
    while ($row = pg_fetch_row($res)) {
      $reg['id'] = $row[0];
      $reg['nom'] = $row[1];
      $reg['rfc'] = $row[2];
      $reg['mai'] = $row[3];
      $reg['fci'] = $row[4];
      $reg['fcf'] = $row[5];
      $reg['lic'] = $row[6];
      $reg['tim'] = $row[7];
      $reg['cod'] = $row[8];
    }
    echo json_encode($reg);
  }else {
    echo "103";
  }
}

?>
