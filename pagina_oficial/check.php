<?php
if (empty($_POST['licencia'])) {
  echo "101";
}else{
  $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
  // creación de la conexión a la base de datos con pg_connect()
  $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
  $lic = $_POST['licencia'];
  $sql = "SELECT * FROM datos where codigo = '".$lic."'";
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
      $reg['proc'] = $row[4];
      $reg['resg'] = $row[5];
      $reg['fci'] = $row[6];
      $reg['fcf'] = $row[7];
      $reg['lic'] = $row[8];
      $reg['tim'] = $row[9];
      $reg['men'] = $row[10];
      $reg['cod'] = $row[11];
    }
    echo json_encode($reg);
  }else {
    echo "103";
  }
}

?>
