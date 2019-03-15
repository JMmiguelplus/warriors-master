<?php
//CHECAR EL NOMBRE EN LA BD
if (isset($_POST))
{
    $emailposted=$_POST["email"];

    // Validate email
if (!filter_var($emailposted, FILTER_VALIDATE_EMAIL) === false) {
$activito=2;
try {
    $db = new PDO("pgsql:host=localhost;dbname=registros", "postgres", "12345");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare('SELECT count(*) email FROM datos WHERE email = :email');
    $stmt->execute(array('email' => $emailposted));
    $numdefilas = $stmt->fetchColumn();

    }
 catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

  if ($numdefilas==0)
  {
   echo "<div class='alert alert-success '><i class='fa fa-check'></i> Email Actualmente disponible</div> <input id='emailchecker' type='hidden' value='1' name='emailchecker'>  ";
  }
   else {
      echo "<div class='alert alert-danger '><i class='fa fa-close'></i> Email Registrado Anteriormente  <input id='emailchecker' type='hidden' value='0' name='emailchecker'></div>";
    }
} else {

  }
}
