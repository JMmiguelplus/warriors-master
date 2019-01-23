<!DOCTYPE html>
<html lang="en">
<head>
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
    <script src="sweetalert2.min.js" type="text/javascript"></script>
    <link href="sweetalert2.min.css" type="text/css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <div id="logo"><img src="img/logo2.png" alt="" width="195" height="100"></div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">

              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#exampleModal">
                estado
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Regresar a la pagina Anterior </a>
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
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase">Licencias Warriors</div>
        </div>
      </div>
    </header>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form name="EstadoLic" id="Estadolic" action="#" method="POST">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingrese su condigo de licencia:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

              <input type="text" class="form-control" name="licencia" id="licencia">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
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
          <table class="table table-sm table-bordered table-dark table-striped">
          <h4 id="Estado">Estado</h4>
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
          <th scope="row">Timepo:</th>
         <td id="time"></td>
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
  <script>

  $(document).ready(function(){//funcion para comprobar el codigo de la licencia
      $("#check").click(function(){
        var lic = document.getElementById('licencia').value;
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
            alert('Coloque su Licencia');
          } else if(res == 102) {
            alert('Error al ejecutar su consulta')
          } else if(res == 103) {
            alert('La licencia '+lic+' no concuerda con ninguna en el sistema. Por favor vuelva a ingresar su licencia correctamente.');
          } else {
            $('#check').val('Verificar');
            $('#exampleModal').modal('hide');
            $('#checkModal').modal('show');
            console.log(res);
            $('#nomb').html(res.nom);
            $('#rfcc').html(res.rfc);
            $('#emai').html(res.mai);
            $('#feci').html(res.fci);
            $('#fecf').html(res.fcf);
            $('#lice').html(res.lic);
            $('#time').html(res.tim);
            $('#codi').html(res.cod);

          }
        })
        .fail(function () {
          console.log("error");
        });
      });
    });
  </script>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contrato de Licencia</h2>
            <h3 class="section-subheading text-muted">Ingrese Datos.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
            <br>
            <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" action="insertar.php">
              <div class="col-md-10">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group col-md-8 offset-md-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-user"></i>
                    </div>
                  </div>
                  <select class="custom-select" name="listac" id="listac">
                     <option value="0">Nuevo Cliente</option>
                  </select>
                </div>
              </div>
              <br>
              <div class="form-row" id="div3">
               <div class="form-group col-md-6">
                 <div class="col-md-12">
                   <label class="sr-only" for="inlineFormInputGro">Nombre</label>
                   <div class="input-group col-md-12">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-user"></i>
                       </div>
                     </div>
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" maxlength="30" required/>
                   </div>
                 </div>
                 <br>
                 <div class="col-md-12" id="div4">
                   <label class="sr-only" for="inlineFormInputGroup">rfc</label>
                   <div class="input-group col-md-12">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-file"></i>
                       </div>
                     </div>
                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" maxlength="13" required="required"/>
                   </div>
                 </div>
                 <br>
                  <div class="col-md-12" id="div5">
                   <label class="sr-only" for="inlineFormInputGroup">email</label>
                   <div class="input-group col-md-12">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-at"></i>
                       </div>
                     </div>
                     <input type="text" class="form-control" id="email" name="email"placeholder="Email" data-validation-error-msg="incorrecto" maxlength="40" class="required emai"/>
                   </div>
                 </div>
                 <br>
               </div>
               <div class="form-group col-md-6">
                 <div class="col-md-12">
                   <label class="sr-only" for="inlineFormInputGroup"></label>
                   <div class="input-group col-md-12 offset-md-3">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-calendar"></i>
                       </div>
                     </div>
                     <input id="datepicker" class="form-control" name="fecha" type="date" placeholder="Fecha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"required/>
                   </div>
                 </div>
                 <br>
                 <div class="col-md-12">
                   <label class="sr-only" for="inlineFormInputGroup"></label>
                   <div class="input-group col-md-12 offset-md-3">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-file-signature"></i>
                       </div>
                     </div>
                     <select class="custom-select" onchange="getNewVal(this);" name="licencia" id="country" name="licencia">

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
                     <select class="custom-select" name="demo">
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
                       <select class="custom-select"name="tiempo">
                         <option disabled selected>Tiempo</option>
                         <option value="1">1 año</option>
                         <option value="2">2 años</option>
                         <option value="3">3 años</option>
                       </select>
                     </div>
                   </div>
                   <br>
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
    		        console.log(idForm);
    	          } else {
    		        console.log("error");
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
                <center><button  class="btn btn-primary btn-xl text-uppercase" type="submit"  onclick="alert('Registrado!!');" name="contratar" id="enviar" value="Contratar">Contratar</button></center>
                <div id="contenedor_errores"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
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
        });
      })
      .fail(function () {
        alert('Error');
      });

      }
    $(document).ready(function(){//seleccion de select a ocultar
      $('#div1').hide();
      $('#div2').hide();
      listaclientes();
      $('#listac').change(function() {
        var asd = document.getElementById('listac').value;
        if (asd >= 1) {
          $('#nombre').attr('readonly',true);
          $('#rfc').attr('readonly',true);
          $('#email').attr('readonly',true);
        }else {
          $('#nombre').attr('readonly',false);
          $('#rfc').attr('readonly',false);
          $('#email').attr('readonly',false);
        }
        console.log(asd);
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
