<!DOCTYPE HTML>
<html>
<head>
    <title>Contrato de license</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Resort Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/jquery-ui.css"/>
    <link rel="stylesheet" href="css/burguer.css"/>
    <link rel="stylesheet" href="css/modal.css"/>
    <!-- <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script> -->
    <!-- Fuentes de Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lobster:400" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Fin Fuentes de Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="application/x-javascript">
    addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }

      </script>
    </head>

<?php
//consulta a licencias http://soyautodidacta.com/2013/03/insertar-datos-en-mysql-con-php-usando-ajax-para-evitar-recargar-la-pagina/
//$sql= pg_query("SELECT * FROM registros",$con);
?>

<!--<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
  <a href="#close" title="close" class="close">X</a>
  <center><h2>Status Actual</h2></center>
  <br>
  <table width="80%">
    <tr>
  	<td>Nombre</td>
		<td>RFC</td>
		<td>Email</td>
    <td>Fecha inicio</td>
    <td>Fecha Final</td>
    <td>Licencia</td>
    <td>Timepo</td>
	</tr>
  </<table>

  //while($row = pg_fetch_array($sql)){
  //    <tr>
  //	echo "<td>".$row['nombre']."</td>";
  //	echo "<td>".$row['rfc']."</td>";
  //	echo "<td>".$row['email']."</td>";
  //	echo "</tr>"$row['fecha_inicio']."</td>";
  //  echo "</tr>"$row['fecha_final']."</td>";
  //  echo "</tr>"$row['licencia']."</td>";
  //  echo "</tr>"$row['tiempo']."</td>";
}

</table>

<body>

<!-- Hack Para Desplegar el Menú activando un checkbox -->
<input type="checkbox" class="checkbox" id="menu-toogle"/>
<label for="menu-toogle" class="menu-toogle"></label>
<nav class="nav">
    <a href="#openModal" class="nav__item">Ver Status de licencia</a>
    <a href="../pagina_oficial/index.php" class="nav__item">Ir a pagina principal</a>
</nav>

<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<form name="codigo" action="" onsubmit="enviarDatos(); return false">
        <center>
        <h2>Ingrese su Codigo para verificar su status:</h2>
        <br>
        <input type="text" name="codigo" placeholder="Codigo" required="required">
        <br><br>
        <?php ?>
        <button type="submit" name="consultar" value="Contratar">Consultar</button>
        </center>
		</form>
	</div>
</div>

<h1>Contrato de licencia</h1>
<form method="POST" action="insertar.php" >

    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Ingresar datos </h2>
            <div class="book-form agileits-login">
                <div class="agileits_reservation_grid">
                    <div class="phone_email1">
                        <div class="form-text">
                  <!--Campos de textos-->
                            <div class="form-text">
                                <i class="fas fa-address-card" aria-hidden="true"></i>
                                <input type="text" maxlength="30" id="nombre" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" placeholder="Cliente/Empresa" required/>

                                </div>

                            <div class="form-text">
                                <i class="far fa-file-alt" aria-hidden="true"></i>
                                <input type="text" maxlength="13"name="rfc" placeholder="RFC" required="required">
                            </div>

                            <div class="form-text">
                                <i class="fas fa-envelope-square" aria-hidden="true"></i>
                                <input type="text" maxlength="40"title="example@example.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="email" placeholder="Email" required/>

                            </div>

                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker" name="fecha" type="date" placeholder="Fecha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"required/>
                            </div>

                            <div class="form-text">
                                <i class="fas fa-address-card" aria-hidden="true"></i>
                                <select onchange="getNewVal(this);" id="country" name="licencia">
                                    <i class="frm-field required" style="Text-align:center;"></i>
                                    <option value="">Tipo de licencia</option>
                                    <option value="Demo">Demo</option>
                                    <option value="Licencia_Standar">Licencia Standart</option>
                                    <option value="Licencia_Full">Licencia Full</option>
                                    <option value="Licencia_Premium">Licencia Premium</option>
                                </select>
                            </div>
                            <div id="div1" style="display:none;">
                              <div class="section_room">
                                <i class="fas fa-compact-disc" aria-hidden="true"></i>
                              <select class="pollo" id="country1" name="demo">
                                    <option disabled selected>Tiempo del DEMO</option>
                                    <option value="30">30 Dias</option>
                                    <option value="40">40 Dias</option>
                                    <option value="90">90 Dias</option>
                               </select>
                             </div>
                           </div>
                           <div id="div2" style="display:none;">
                             <div class="section_room">
                               <i class="far fa-clock" aria-hidden="true"></i>
                              <select id="country2" name="tiempo">
                                  <option disabled selected>Tiempo</option>
                                  <option value="1">1 año</option>
                                  <option value="2">2 años</option>
                                  <option value="3">3 años</option>
                              </select>
                          </div>
                        </div>
                    </div>
                </div>
                <center><input type="submit" class="submit" name="contratar" value="Contratar"></input></center>
                    <?php
                    include("validar.php");
                     ?>
                <div class="clear"></div>
            </div>
        </div>
        <script>
        function getNewVal(sel) {
              if (sel.value=="Demo"){
                   divC = document.getElementById("div2");
                   divC.style.display = "none";

                   divT = document.getElementById("div1");
                   divT.style.display = "";

              }else {
                divC = document.getElementById("div2");
                divC.style.display = "";

                divT = document.getElementById("div1");
                divT.style.display = "none";
              }
        }
</script>
    </div>
    </div>
</form>
</body>
</html>
