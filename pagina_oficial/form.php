<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="img/ico" sizes="16x16" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,minimum-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Warriors license</title>
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <style>
    .btn-rosita {
      color: #000;
      background-color: #e9ecef;
      border-color: #6c757d;
    }
    .btn-rosita:hover{
      color: #ffffff;
      background-color: #000;
      border-color: #000;
    }
    </style>
  </head>
  <body id="page-top">

    <!-- Modal -->
    <!-- Estatus -->
    <div class="modal fade" id="Estatus" tabindex="-1" role="dialog" aria-labelledby="EstatusLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="EstatusLabel">Ingrese su condigo de licencia o Conozca sus licencias contratadas en Warriors:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
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
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
              <input  type="button" class="btn btn-outline-success" name="check" id="check" value="Verificar">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Check Modal -->
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
    <!-- Modal Info -->
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <div id="logo"><img src="img/logo2.png" alt="" width="195" height="100"></div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <!--Menu-->
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#Estatus">Estatus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Regresar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container-one">
        <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase">Registro de contacto</div>
        </div>
      </div>
    </header>

    <!-- Services -->

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-heading text-uppercase text-center">Ingrese los datos</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form action="insertar.php" method="POST">

              <div class="row">
                <div class="input-group col-md-4 offset-md-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-user"></i>
                    </div>
                  </div>
                  <select class="custom-select" name="listac" id="listac">
                    <option value="0">Clientes Warriors</option>
                  </select>
                </div>
              </div>

              <div class="form-row justify-content-md-center">
                <div class='alert alert-danger col-md-4 text-center' id="msj">
                  Ya  no es necesario llenar los campos "Nombre o Empresa","RFC","Email".
                </div>
                <br>
              </div>

              <div class="form-row justify-content-md-center">
                <div class="form-group col-md-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                    <input class="form-control" type="text" name="nombre" id="nombre" style="text-transform:uppercase;" placeholder="Nombre del cliente/Empresa" minlength="4" maxlength="40" required/>
                    <div class="col-md-12 offset-md-1" id="checkusername"></div>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-file"></i>
                      </span>
                    </div>
                    <input class="form-control" type="text" name="rfc" id="rfc" style="text-transform:uppercase;" placeholder="RFC" minlength="12" maxlength="13" title="Mínimo 12 y máximo 13, sin espacios" required/>
                    <div class="col-md-12" id="checkrfc"></div>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-at"></i>
                      </span>
                    </div>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Correo" required/>
                    <div class="col-md-12" id="checkemailresponse"></div>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fab fa-dropbox"></i>
                      </span>
                    </div>
                    <input class="form-control" type="text" name="producto" id="pro" placeholder="Producto" minlength="5" maxlength="10" style="text-transform: uppercase;" title="Mínimo 5 y máximo 10" required/>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-file-signature"></i>
                      </span>
                    </div>
                    <select class="custom-select" onchange="getNewVal(this);" name="licencia" id="country" stye="text-transform:uppercase;" required>
                      <option selected>Tipo de licencia</option>
                      <option value="Demo">Demo</option>
                      <option value="Licencia_Standar">Licencia Estandar</option>
                      <option value="Licencia_Full">Licencia Full</option>
                      <option value="Licencia_Premium">Licencia Premium</option>
                    </select>
                  </div>
                  <div class="input-group mb-3" id="div1">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-credit-card"></i>
                      </span>
                    </div>
                    <select class="custom-select" name="tiempo" style="text-transform:uppercase;" required>
                      <option disabled selected>Tiempo de la Demo</option>
                      <option value="30">30 Días</option>
                      <option value="40">40 Días</option>
                      <option value="90">90 Días</option>
                    </select>
                  </div>
                  <div class="input-group mb-3" id="div2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-clock"></i>
                      </span>
                    </div>
                    <select class="custom-select" name="tiempo" style="text-transform:uppercase;" required>
                      <option disabled selected>Tiempo de la Licencia</option>
                      <option value="365">1 año</option>
                      <option value="730">2 años</option>
                      <option value="1095">3 años</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row justify-content-md-center">
                <div class="input-group col-md-8">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-sticky-note"></i>
                    </span>
                  </div>
                  <textarea class="form-control" name="descripcion" id="message" placeholder="Nota:" data-validation-required-message="Ingresa una descripción" style="text-transform:uppercase;" required></textarea>
                </div>
              </div>
              <div class="form-row justify-content-md-center">
                <div class="col-md-8">
                  <br>
                  <input class="btn btn-rosita col-md-12 text-uppercase" type="submit" name="enviar" id="contratar" value="Registrar"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  <!-- Footer -->
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
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <!-- Script -->
  <script src="js/script1.js"></script>

</body>
</html>
