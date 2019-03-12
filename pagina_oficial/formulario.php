<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="img/ico" sizes="16x16" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Warriors license</title>
     <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Custom fonts for this template -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-3.2.1.js"></script>
    <link href="sweetalert2.min.css" type="text/css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <div id="logo"><img  src="img/logo2.png" alt="" width="195" height="100"></div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#exampleModal">
                estatus
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Regresar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead imgback">
      <div class="container-one">
        <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase">Registro de Contrato</div>
        </div>
      </div>
    </header>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingrese su condigo de licencia o Conozca sus licencias contratadas en Warriors:</h5>
            <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--consulta de clientes-->
          <div class="modal-body">
            <div class="col-md-10">
              <label class="sr-only" for="inlineFormInputGroup"></label>
              <div class="input-group col-md-8 offset-md-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-user"></i>
                  </div>
                </div>
                <select class="custom-select" name="Consulc" id="Consulc">
                   <option value="0">Clientes registrados</option>
                </select>
                <script src="consultabd.js"></script>
              </div>
            </div>
            <center>o</center>
            <input type="text" class="form-control" name="licencia" id="licencia">
          </div>
          <div class="modal-footer">
            <button type="button" id="btncerrar" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
            <input  type="button" class="btn btn-outline-success" name="check" id="check" value="Verificar">
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="checkModal" tabindex="-1" role="dialog" aria-labelledby="checkModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="checkModalLabel">El estado es:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-hover table-bordered table-dark table-striped">
          <tr>
            <td><h4 id="Estado">Estado</h4></td>
            <td id="Stats"></td>
          </tr>
          <header>
          <tr>
          </tr>
         </thead>
         <tbody>
          <tr>
            <th scope="row">Nombre:</th>
            <td id="nomb"></td>
              </tr>
          <tr>
          <th scope="row">RFC:</th>
         <td id="rfcc"></td>
             </tr>
         <tr>
          <th scope="row">Email:</th>
         <td id="emai"></td>
             </tr>
         <tr>
          <th scope="row">Equipo:</th>
         <td id="pro"></td>
             </tr>
         <tr>
          <th scope="row">Fecha de Registro:</th>
         <td id="regi"></td>
             </tr>
         <tr>
          <th scope="row">Fecha Inicial:</th>
         <td id="feci"></td>
            </tr>
          <tr>
          <th scope="row">Fecha Final:</th>
         <td id="fecf"></td>
            </tr>
          <tr>
          <th scope="row">Tipo Licencia:</th>
         <td id="lice"></td>
           </tr>
          <tr>
          <th scope="row">Tiempo:</th>
         <td id="time"></td>
           </tr>
          <tr>
          <th scope="row">Nota:</th>
         <td id="com"></td>
           </tr>
          <tr>
          <th scope="row">Codigo:</th>
         <td id="codi"></td>
         </tr>
           </tbody>
         </table>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="checkModal1" tabindex="-1" role="dialog" aria-labelledby="checkModalLabel1" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="checkModalLabel1">Sus licencias son:</h5>
          </button>
        </div>
        <div class="modal-body">
          <div id="DatosLic"></div>
           <table class="table  table-sm table-striped table-dark" id="tablalic">
             <!--DATOS LICENCIAS-->
         <tbody>
             <tr>
               <th scope="row">Nombre:</th>
              <td colspan="4"id="name"></td>
            </tr>
          <tr>
             <th scope="row">RFC:</th>
              <td colspan="4"id="RFC"></td>
             </tr>
          <tr>
             <th scope="row">Email:</th>
              <td colspan="4"id="correo"></td>
             </tr>
          <tr>
             <th scope="row">Sus licencias en Warriors:</th>
                  <td colspan=""id="lislicencia"></td>
                      <th scope="row">Equipo:</th>
                         <td colspan="3"id="lispro"></td>
                      </tr>
                  </tbody>
               </table>
             <div class="modal-footer">
             <button type="button" class="btn btn-primary" id="Ocultar" value="1">OK</button>
           </div>
         <span id="ASDF"></span>
        </div>
      </div>
    </div>
  </div>

  <script>
  $(document).ready(function(){//funcion para comprobar el codigo de la licencia
      $("#check").click(function(){
        var lic = document.getElementById('licencia').value;
        var cl =  document.getElementById ('Consulc').value;
         if(  cl == 0 ){
           $.ajax({
             type:"POST",
             url:"check.php",
             data:{licencia:lic},
             dataType: "JSON",
             beforeSend: function() {
               $("#check").val("Comprobando...");
             }
           })
           .done(function (res) {
             if (res == 101) {
               alert('Coloque el codigo de la Licencia o seleccione un nombre');
             } else if(res == 102) {
               alert('Error al ejecutar su consulta')
             } else if(res == 103) {
               alert('La licencia '+lic+' no concuerda con ninguna en el sistema. Por favor vuelva a ingresar su licencia correctamente.');
             } else {
               $('#check').val('Verificar');
               $('#exampleModal').modal('hide');
               $('#checkModal').modal('show');
               $('#nomb').html(res.nom);
               $('#rfcc').html(res.rfc);
               $('#emai').html(res.mai);
               $('#pro').html(res.proc);
               $('#regi').html(res.resg);
               $('#feci').html(res.fci);
               $('#fecf').html(res.fcf);
               $('#lice').html(res.lic);
               $('#time').html(res.tim+" dias");
               $('#com').html(res.men);
               $('#codi').html(res.cod);

                var f = new Date();
                var ff = new Date(res.fcf);

                if(f <= ff){
                  $('#Stats').addClass("bg-success");
                  $('#Stats').html("Activo");
                }else{
                  //console.log("inactivo");
                  $('#Stats').addClass("bg-danger");
                  $('#Stats').html("Inactivo");
                }
             }
           })
           .fail(function () {
             console.log("error");
           });

         }else{
            $('#licencia').attr('readonly',false);
            $('#exampleModal').modal("hide");
            $('#checkModal1').modal("show");////////////Consulta de todoa las licencias del cliente

            $.ajax({
              type:"POST",
              url:"check1.php",
              data:{Consulc:cl},
              dataType: "JSON",
              beforeSend: function() {
                $("#check1").val("Comprobando...");
              }
            })
              .done(function (res2) {
                console.log(res2);
                $("#name").html(res2[0][1]);
                $("#RFC").html(res2[0][2]);
                $("#correo").html(res2[0][3]);
                 var ted = document.getElementById('lislicencia');
                 var ted1 = document.getElementById('lispro');
                // var ted2 = document.getElementById('licencia');
                 ted.innerHTML = '';
                 ted1.innerHTML = '';
                // ted2.innerHTML = '';
                $.each(res2,function (i, item){
                  console.log(item[6]);
                  $("#lislicencia").append(item[8]+"<br>");
                });
                $.each(res2,function (i, item){
                  console.log(item[6]);
                  $("#lispro").append(item[4]+"<br>");
                });
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if (jqXHR.status === 0) {
                  alert('Not connect: Verify Network.');
                } else if (jqXHR.status == 404) {
                  alert('Requested page not found [404]');
                } else if (jqXHR.status == 500) {
                  alert('Internal Server Error [500].');
                } else if (textStatus === 'parsererror') {
                  alert('Requested JSON parse failed.');
                  console.log(textStatus+" "+errorThrown);
                } else if (textStatus === 'timeout') {
                  alert('Time out error.');
                } else if (textStatus === 'abort') {
                  alert('Ajax request aborted.');
                } else {
                  alert('Uncaught Error: ' + jqXHR.responseText);
                }
            });
          }
        });

        $('#Ocultar').click(function () {
          $('#checkModal1').modal('hide');
          document.getElementById ('Consulc').value = 0;
          document.getElementById("licencia").disabled = false;

        });
        var result = document.getElementById('lislicencia');
          result.innerHTML = '';
      });
       </script>
    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Ingrese Datos</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
            <br>
            <form id="contactForm" name="sentMessage" method="POST" action="insertar.php" >
              <div class="col-md-10">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group col-md-8 offset-md-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-user"></i>
                    </div>
                     </div>
                       <select class="custom-select" name="listac" id="listac">
                     <option value="0">Clientes Warriors</option>
                  </select>
                </div>
              <div class="col-md-12">
                <div class='alerta alert-men  col-mod-20' id="msj">
                       <i class='fa fa-close'></i>
                      Ya  no es necesario llenar los campos "Nombre o Empresa","RFC","Email".
                  </div>
              </div>
              <br>
              <div class="form-row1" id="div3">
               <div class="form-group col-md-6">
                 <div class="col-md-12">
                   <label class="sr-only" for="inlineFormInputGro">Nombre</label>
                   <div class="input-group col-md-12">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-user"></i>
                       </div>
                     </div>
                     <input type="text" class="form-control" style="text-transform: uppercase;" id="nombre" name="nombre" onkeypress="return Sletras(event)" placeholder="Nombre y Apellidos o Empresa" minlength="4" maxlength="40" required/>
                        <div id="checkusername" class=""></div>
                   </div>
                 </div>
                 <script type="text/javascript">
                       function Sletras(e){
                     key = e.keyCode || e.which;
                        teclado= String.fromCharCode(key).toLowerCase();
                        letras=" abcdefghijklmnopqrstuvwxyz";
                        especiales="8-37-38-46-164";
                        teclado_especial=false;
                     for(var i in especiales){
                          if(key==especiales[i]){
                     teclado_especial=true;break;
                     }
                 }
                   if(letras.indexOf(teclado)==-1 && !teclado_especial){
                          return false;
                     }
                }
                 </script>
                 <br>
                 <div class="col-md-12" id="div4">
                   <label class="sr-only" for="inlineFormInputGroup">rfc</label>
                   <div class="input-group col-md-12">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-file"></i>
                       </div>
                     </div>
                    <input type="text" class="form-control" style="text-transform: uppercase;" id="rfc" name="rfc" onkeypress="return Srfc(event)" title="Minimo 12,Maximo 13 Sin espacios" placeholder="Escribe un RFC" maxlength="13" minlength="12">
                       <div id="checkrfc" class=""></div>
                   </div>
                 </div>
                 <script type="text/javascript">
                      function Srfc(e){
                     key = e.keyCode || e.which;
                    teclado= String.fromCharCode(key).toLowerCase();
                    letras=" abcdefghijklmnopqrstuvwxyz1234567890";
                    especiales="8-37-38-46-164";
                    teclado_especial=false;
                    for(var i in especiales){
                    if(key==especiales[i]){
                    teclado_especial=true;break;
                            }
                    }
                    if(letras.indexOf(teclado)==-1 && !teclado_especial){
                    return false;
                          }
                    }
                 </script>
                 <br>
                  <div class="col-md-12" id="div5">
                   <label class="sr-only" for="inlineFormInputGroup">email</label>
                   <div class="input-group col-md-12">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-at"></i>
                       </div>
                     </div>
                     <input type="text" class="form-control" id="email" name="email"placeholder="ESCRIBE UN EMAIL"  maxlength="40" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required/>
                    <div id="checkemailresponse" class=""></div>
                   </div>
                 </div>
                 <br>
                  <div class="col-md-12" id="div7">
                   <label class="sr-only" for="inlineFormInputGroup">producto</label>
                   <div class="input-group col-md-12">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fab fa-dropbox"></i>
                       </div>
                     </div>
                     <input type="text" class="form-control" id="pro" style="text-transform: uppercase;" name="producto" placeholder="Producto" maxlength="10" minlength="5" onkeypress="return SletrasNum(event)" title="Minimo 5 caractres maximo 10" required/>
                   </div>
                 </div>
                 <script type="text/javascript">
                       function SletrasNum(e){
                     key = e.keyCode || e.which;
                        teclado= String.fromCharCode(key).toLowerCase();
                        letras=" abcdefghijklmnopqrstuvwxyz1234567890-*/.";
                        especiales="8-37-38-46-164";
                        teclado_especial=false;
                     for(var i in especiales){
                          if(key==especiales[i]){
                     teclado_especial=true;break;
                     }
                 }
                   if(letras.indexOf(teclado)==-1 && !teclado_especial){
                          return false;
                     }
                }
                 </script>
                 <br>
               </div>
                <div class="form-group col-md-6">
                 <!-- <div class="col-md-12">
                   <label class="sr-only" for="inlineFormInputGroup"></label>
                   <div class="input-group col-md-12 offset-md-4">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-calendar"></i>
                       </div>
                     </div>
                     <input id="datepicker" class="form-control" name="fecha" type="date" placeholder="Seleciona la Fecha de Inicio" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required/>
                   </div>
                 </div> -->
                 <br>
                 <div class="col-md-12">
                   <label class="sr-only" for="inlineFormInputGroup"></label>
                   <div class="input-group col-md-12 offset-md-3">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-file-signature"></i>
                       </div>
                     </div>
                     <select class="custom-select" onchange="getNewVal(this);" name="licencia" id="country" required/>
                       <option selected>Tipo de licencia </option>
                       <option value="Demo">Demo</option>
                       <option value="Licencia_Standar">Licencia Standart</option>
                       <option value="Licencia_Full">Licencia Full</option>
                       <option value="Licencia_Premium">Licencia Premium</option>
                     </select>
                   </div>
                 </div>
                 <br>
                 <div class="col-md-12" id="div1">
                   <label class="sr-only" for="inlineFormInputGroup"></label>
                   <div class="input-group col-md-12 offset-md-3">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="far fa-credit-card"></i>
                       </div>
                     </div>
                     <select class="custom-select" name="tiempo" required/>
                       <option disabled selected>Tiempo del DEMO</option>
                       <option value="30">30 Dias</option>
                       <option value="40">40 Dias</option>
                       <option value="90">90 Dias</option>
                     </select>
                    </div>
                   </div>
                   <br>
                   <div class="col-md-12" id="div2">
                     <label class="sr-only" for="inlineFormInputGroup"></label>
                     <div class="input-group col-md-12 offset-md-3">
                       <div class="input-group-prepend">
                         <div class="input-group-text">
                           <i class="fas fa-clock"></i>
                         </div>
                       </div>
                       <select class="custom-select"name="tiempo" required/>
                         <option disabled selected>Tiempo</option>
                         <option value="365">1 año</option>
                         <option value="730">2 años</option>
                         <option value="1095">3 años</option>
                       </select>
                     </div>
                   </div>
                     <br>
                       <div class="col-md-12">
                         <div class="form-group col-md-12 offset-md-3">
                           <textarea class="form-control" id="message" style="text-transform: uppercase;" placeholder="Nota:" name="descripcion" required="required" data-validation-required-message="Please enter a message."></textarea>
                        </div>
                      </div>
                   </div>
                 </div>

             <script>
             var namePattern = "^[a-z A-Z]{4,30}$";
             var rfcPattern = "[A-Za-z]{4,8}";
             var emailPattern = "^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$";
             function checkInput(idInput, pattern) {
	              return $(idInput).val().match(pattern) ? true : false;

             }
             function checkForm (idForm) {
            	$(idForm + " *").on("keydown", function() {
    	          if (checkInput("#nombre", namePattern) &&
    	               checkInput("#rfc", rfcPattern)&&
    	               checkInput("#email", emailPattern))
    	          {

    	          } else {

    	          }
	            });
              }

            $(function() {
            checkForm("#contactForm");
            });

            </script>
              <div class="clearfix"></div>
              <div class="col-md-6 offset-md-3">
                <div id="success"></div>
                <center><button  class="btn btn-primary btn-xl text-uppercase" type="submit" name="contratar" id="enviar" value="Contratar">Enviar</button></center>
                <div id="contenedor_errores"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

   <script>
     $(document).ready(function () {
   $("#nombre").keyup(checarUsuarios);
 });
     $(document).ready(function () {
   $("#nombre").change(checarUsuarios);
  });
      $(document).ready(function () {
   $("#rfc").keyup(checarrfc);
  });
     $(document).ready(function () {
   $("#rfc").change(checarrfc);
  });
     $(document).ready(function () {
   $("#email").keyup(checarEmails);
  });
     $(document).ready(function () {
   $("#email").change(checarEmails);
  });
  function checarUsuarios() {

  var nombre= document.getElementById('nombre').value;
  var namelenght = nombre.length;
  if (namelenght<4)
  {
  document.getElementById("checkusername").innerHTML="<i class='fa fa-close'></i>  <input id='usernamechecker' type='hidden' value='0' name='usernamechecker'> ";

  }
  else {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
  document.getElementById("checkusername").innerHTML = xhttp.responseText;
  usernameresponsed = document.getElementById('nombre').value;

  if (usernameresponsed=="1")
  {

  if (emailresponsed)
   {
      emailresponsed=document.getElementById('emailchecker').value;
      if (emailresponsed=="1"){
          document.getElementById("contratar").disabled = false;
                    }
   }
  }


  else if (usernameresponsed=="0")
  {
    document.getElementById("contratar").disabled = true;
  }
  }
  };
  xhttp.open("POST", "checarusername.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("nombre="+nombre+"");

  }
  }
  function checarEmails() {

  var email= document.getElementById('email').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
  document.getElementById("checkemailresponse").innerHTML = xhttp.responseText;
  emailresponsed = document.getElementById('email').value;
  if (emailresponsed=="1")
  {

   if (usernameresponsed)
   {
      usernameresponsed=document.getElementById('usernamechecker').value;
      if (usernameresponsed=="1"){
          document.getElementById("contratar").disabled = false;
                    }
   }
  }
  else if (emailresponsed=="0")
  {
    document.getElementById("contratar").disabled = true;
  }
  }
  };
  xhttp.open("POST", "checkemail.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("email="+email+"");

  }
  function checarrfc() {

  var rfc= document.getElementById('rfc').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
  document.getElementById("checkrfc").innerHTML = xhttp.responseText;
  rfcresponsed = document.getElementById('rfc').value;
  if (rfcresponsed=="1")
  {

   if (usernameresponsed)
   {
      usernameresponsed=document.getElementById('usernamechecker').value;
      if (usernameresponsed=="1"){
          document.getElementById("contratar").disabled = false;
                    }
   }
  }
  else if (rfcresponsed=="0")
  {
    document.getElementById("contratar").disabled = true;
  }
  }
  };
  xhttp.open("POST", "checarrfc.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("rfc="+rfc+"");
  }
  </script>

    <script>
    function listaclientes() {
      $.ajax({
        url: 'listado.php',
        dataType:'JSON'
      })
      .done(function(respuesta) {
        console.log(respuesta);
        $.each(respuesta,function(i, item) {
          $('#listac').append($('<option>',{
            value:item['id_datos'],
            text :item['nombre']
          }));
          $('#Consulc').append($('<option>',{
            value:item['id_datos'],
            text :item['nombre']
          }));
        });
      })
      .fail(function () {
        alert('Error');
      });

      }
    $(document).ready(function(){//seleccion de select a ocultar
      $('#div1').hide();
      $('#div2').hide();
      $('#msj').hide();
      listaclientes();
      $('#listac').change(function() {
        var asd = document.getElementById('listac').value;
        if (asd >= 1) {
          $('#nombre').attr('readonly',true);
          $('#rfc').attr('readonly',true);
          $('#email').attr('readonly',true);
          $('#msj').show();
        }else {
          $('#nombre').attr('readonly',false);
          $('#rfc').attr('readonly',false);
          $('#email').attr('readonly',false);
          $('#msj').hide();
        }

      });

    });
    function getNewVal(sel) {  //funcion para ocultar los selects
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
<div class="copyright py-4 text-center text-white">
  <div class="container">
    <small>Copyright &copy; Warriors labs</small>
  </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- <script src="js/contact_me.js"></script> -->

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script src="sweetalert2.min.js"></script>

  </body>

</html>
