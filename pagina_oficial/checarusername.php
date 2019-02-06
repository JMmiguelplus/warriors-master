<?php

// $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
// creación de la conexión a la base de datos con pg_connect()
// $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");


//CHECH IF USERNAME EXISTS
if (isset($_POST))
{
    $usernameposted=$_POST["nombre"];
    if (strlen($usernameposted)<4) {
    }
    else {
 try {
    $pdo = new PDO("pgsql:host=localhost;dbname=registros", "postgres", "12345");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('SELECT COUNT(*) nombre FROM datos1 WHERE nombre = :nombre');
    $stmt->execute(array('nombre' => $usernameposted));
    $numdefilas = $stmt->fetchColumn();


    }
 catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

if ($numdefilas==0)
{
 echo "<div class='alert alert-success '><i class='fa fa-check'></i> Nombre de usuario disponible</div><input id='usernamechecker' type='hidden' value='1' name='usernamechecker'>";
}
 else {
    echo "<div class='alert alert-danger'><i class='fa fa-close'></i> Nombre de usuario NO disponible<input id='usernamechecker' type='hidden' value='0' name='usernamechecker'></div>";
}
}
}
