<?php

//CONNECT TO PDO


//CHECH IF USERNAME EXISTS
if (isset($_POST))
{
    $emailposted=$_POST["email"];

    // Validate email
if (!filter_var($emailposted, FILTER_VALIDATE_EMAIL) === false) {
$activito=2;
try {
    $db = new PDO("pgsql:host=localhost;dbname=registros", "postgres", "12345");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare('SELECT count(*) FROM datos1 WHERE email = :email AND active=:active');
    $stmt->execute(array('email' => $emailposted,'active' => $activito));
    $numdefilas = $stmt->fetchColumn();

    }
 catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

  if ($numdefilas==0)
  {
   echo "<div class='alert alert-success '><i class='fa fa-check'></i> Email disponible</div> <input id='emailchecker' type='hidden' value='1' name='emailchecker'>  ";
  }
   else {
      echo "<div class='alert alert-danger '><i class='fa fa-close'></i> Email NO disponible <input id='emailchecker' type='hidden' value='0' name='emailchecker'></div>";
    }
} else {
        echo 'ERROR: ';
  }
}
