<?php

//CHECH IF USERNAME EXISTS
if (isset($_POST))
{
    $usernameposted=$_POST["rfc"];
    if (strlen($usernameposted)<4) {
    }
    else {
 try {
    $pdo = new PDO("pgsql:host=localhost;dbname=registros", "postgres", "12345");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('SELECT COUNT(*) rfc FROM datos1 WHERE rfc = :rfc');
    $stmt->execute(array('rfc' => $usernameposted));
    $numdefilas = $stmt->fetchColumn();


    }
 catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

if ($numdefilas==0)
{
 echo "<div class='alert alert-success '><i class='fa fa-check'></i> El RFC del usuario disponible</div><input id='usernamechecker' type='hidden' value='1' name='usernamechecker'>";
}
 else {
    echo "<div class='alert alert-danger'><i class='fa fa-close'></i> El RFC del usuario NO disponible<input id='usernamechecker' type='hidden' value='0' name='usernamechecker'></div>";
}
}
}
