<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="img/ico" sizes="16x16" href="img/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Warriors Estatus</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <script>
  $(document).ready(function(){
    $("#insert").modal("show");
  });

  </script>
</head>

<body id="page-top">

  <div class="modal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" id="insert">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Activa tu licencia</h5>
      </div>
      <div class="modal-body">
      <form action="#">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Coloca tu licencia</label>
          <input type="text" class="form-control" id="activar">
        </div>
      </div>
      <div class="modal-footer">
        <div id="alert"><img id="imagen" src="img/cargando.gif" ><span id="mensaje"></span></div>
        <input type="submit" class="btn btn-outline-success" id="check" value="Verificar" ></input>
      </div>
    </form>
    </div>
  </div>
</div>
<script>

  $(document).ready(function(){//funcion para comprobar el codigo de la licencia
      $("#check").click(function(){
        var lic = document.getElementById('activar').value;
           $.ajax({
             type:"POST",
             url:"check.php",
             data:{licencia:lic},
             dataType: "JSON",
             beforeSend: function() {
               $("#check").val("Comprobando...");
               $("#imagen").show();
               $("#mensaje").html('Activando..');
             }
           })
           .done(function(respuesta){
             $('#imagen').hide();
             if(respuesta == 1){
               $('mensaje').html('hola');
             }
             else{
               $('#mensaje').html('Ingresa un Codigo');
             }
           }
         )
           .done(function (res) {
             if (res == 101) {
             } else if(res == 102) {
               alert('Error al ejecutar su consulta')
             } else if(res == 103) {
               alert('La licencia '+lic+' no concuerda con ninguna en el sistema. Por favor vuelva a ingresar su licencia correctamente.');
             } else {
               $('#check').val('Verificar');
               $('#insert').modal('hide');
               $('#table-one').val('show');
               $('#nomb').html(res.nom);
               $('#pro').html(res.proc);
               $('#feci').html(res.fci);
               $('#fecf').html(res.fcf);
               $('#lice').html(res.lic);
               $('#time').html(res.tim);
               setTimeout(function(){
                 $("#exampleModal").modal('show');
               },100);
           }
         });
       })
     })

      </script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" ></div>
      <div class="ima-body"><img src="img/cor.png">Licencia Activada </div><br>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
          </div>
          <table class="table table-sm table-striped table-dark">
  <thead>
    <tr>
      <th scope="col" class="bg-success"><center>Activo</center></th>
      <th scope="col" class="bg-danger"><center>Inactivo</center></th>
      <th scope="col" class="bg-warning"><center>No disponible</center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    </tr>
  </tbody>
</table>
<p>
          <table class="table table-sm table-responsive table-bordered table-dark" id="table-one" name="table-one">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Licencia</th>
              <th scope="col">Equipo</th>
              <th scope="col">Tiempo</th>
              <th scope="col">Fecha inicial</th>
              <th scope="col">Fecha Final</th>
              <th scope="col">*Servicios</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="4" id="nomb"></td>
              <td rowspan="4"id="lice"></td>
              <td rowspan="4"id="pro"></td>
              <td rowspan="4"id="time"></td>
              <td rowspan="4"id="feci"></td>
              <td rowspan="4"id="fecf"></td>
              <td class="bg-success">Soporte Tecnico</td>
            </tr>
            <td class="bg-success">Monitoreo</td>
          </tr>
          <tr>
          <td class="bg-danger">Actuliazaciones</td>
        </tr>
          <tr>
          <td class="bg-warning">Capacitacion</td>
        </tr>
            </table>
          </tbody>
       </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
                <div class="screen">
                  <img src="img/logo2.png" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <footer>
    <div class="container">
      <p>&copy; Warriors Labs.</p>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <!--<script src="js/new-age.min.js"></script>-->

</body>

</html>
