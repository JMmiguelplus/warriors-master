<?php
sleep(2);
$licencia = $_POST["licencia"];
if(empty($_POST['licencia'])) {
  echo "101";
}else{
  $lic = $_POST['licencia'];
  function consulta($lic)
  {
    $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
    // creación de la conexión a la base de datos con pg_connect()
    $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
    $sql = "SELECT * FROM datos where codigo = '".$lic."'";
    $res = pg_query($conexion,$sql)  or die ("Algo ha ido mal en la consulta a la base de datos");
    $rows = pg_num_rows($res);
    if($rows == 1) {
      while($row = pg_fetch_row($res)) {
        $reg['id'] = $row[0];
        $reg['nom'] = $row[1];
        $reg['rfc'] = $row[2];
        $reg['mai'] = $row[3];
        $reg['proc'] = $row[4];
        $reg['fci'] = $row[6];
        $reg['fcf'] = $row[7];
        $reg['lic'] = $row[8];
        $reg['tim'] = $row[9];
      }
      echo json_encode($reg);
    }
  }
  function consult($lic)
  {
    $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
    // creación de la conexión a la base de datos con pg_connect()
    $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
    $sql = "SELECT * FROM datos where codigo = '".$lic."'";
    $res = pg_query($conexion,$sql)  or die ("Algo ha ido mal en la consulta a la base de datos");
    $rows = pg_num_rows($res);
    if($rows == 1) {
      while($row = pg_fetch_row($res)) {
        $reg['id'] = $row[0];
        $reg['nom'] = $row[1];
        $reg['rfc'] = $row[2];
        $reg['mai'] = $row[3];
        $reg['proc'] = $row[4];
        $reg['fci'] = $row[6];
        $reg['fcf'] = $row[7];
        $reg['lic'] = $row[8];
        $reg['tim'] = $row[9];
      }
      return $reg;
    }
  }
  $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
  // creación de la conexión a la base de datos con pg_connect()
  $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
  $sql = "SELECT * FROM datos where codigo = '".$lic."'";
  $res = pg_query($conexion,$sql)  or die ("Algo ha ido mal en la consulta a la base de datos");
  $rows = pg_num_rows($res);
  if($rows == 1) {
    while($row = pg_fetch_row($res)) {
      $reg['fci'] = $row[6];
      $reg['fcf'] = $row[7];
      $reg['tim'] = $row[9];
    }
       $dats = consult($lic);
       $contenid = $lic."\n".$dats['nom']."\n".$dats['proc']."\n".$dats['tim']."\n".$dats['fci']."\n".$dats['fcf'];
       $archivo = fopen('../Active licenses/Archivotxt/licencia_warriors-'.date("d")."_".time().".txt","a+");
       fwrite($archivo,PHP_EOL."$contenid");
       fclose($archivo);

    if($reg['fci'] == '' and $reg['fcf'] == ''){
        $dias = $reg["tim"];
        $fci = date('d-m-Y');
        $fcf = date('d-m-Y',strtotime($fci."+".$dias."days"));
        $update = "UPDATE datos SET fecha_inicio = '$fci', fecha_final = '$fcf' WHERE codigo = '$lic'";
        if(pg_query($conexion,$update)){
          consulta($lic);
        }

    } else {
        consulta($lic);
    }
  } else {
    echo "103";
  }
}
