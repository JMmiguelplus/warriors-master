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

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body id="page-top">
    <?php
    error_reporting(0);
     $as = $_GET['modal'];
     if($as == 1){
   ?>
   <script>
   $(document).ready(function(){
     $('#myModal').modal('show');
   });
  </script>
   <?php
 }else{
   ?>
   <script>
   $(document).ready(function(){
     $('#myModal').modal('hide');
   });
  </script>
   <?php
 }
     ?>

    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <center><h4 class="modal-title" id="modalTitle">Registrado Éxitosamente.</h4></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <img src="../Active licenses/img/gifP.gif" width="100%"><center></center >
        </div>
        <div class="modal-footer">
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
              <a class="nav-link js-scroll-trigger"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="formulario.php">Contratar licencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a>
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
          <div class="intro-heading text-uppercase">Licencias Warriors</div>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"></h2>
            <h3 class="section-subheading text-muted">Nuestras licencias</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Licencia Standard</h4>
            <p class="text-muted">Caracterìsticas:
								 Soporte Técnico via remota (mail)8x3,
								Actualizaciones del sistema,
								Monitoreo en tiempo real,
								Garantia por un Año.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Licencia Full</h4>
            <p class="text-muted">Caracterìstica:
									Soporte Técnico *via remota (9:00 am a 19:00pm) Sitio (9:00am a 18:00pm) Sabados (9:00 a 13:00),
									Actualización,
									Capacitación,
									Garantia por un año (Mesa de ayuda).</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-star fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Licencia Premium</h4>
            <p class="text-muted">Caracterìsticas;
						         Soporte Técnico (9:00 a 19:00),
								   Actualización,
								   Capacitaciones,
								   Garantia por un Año.</p>
          </div>
        </div>
      </div>
    </section>

        <!-- Contact Section -->
        <section class="page-section" id="contact">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-9 text-center">
                <h2 class="text-muted2">Contactanos</h2>
                <hr class="divider my-3">
                <p class="text-muted2 mb-6">Corporativo, consultor, desarrollador e integrador de soluciones tecnológicas para aumentar la productividad empresarial.</p>
              </div>
            </div>
            <div class="text-muted2">
              <div class=" col-lg-5 ml-auto text-center flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.5306287055537!2d-99.13836098564555!3d19.389466086908836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fef84cf59ff9%3A0x5f71978a68a92d8b!2sWarriors%C2%AE!5e0!3m2!1ses!2smx!4v1551128144575" width="400" height="300" frameborder="" style="border:2" allowfullscreen></iframe>
              </div>
              <div class="col-lg-5 ml-auto text-center">
                <br><br>
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <div>+52 (55) 55792273</div>
                <br>
                <i class="fas fa-at fa-3x mb-3 text-muted"></i>
                <div>soporte@warriorsdefender.com</div>
              </div>
          </div>
        </div>
        </section>

        <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright1">Powered By WarriorsLabs. All Rights Reserved.</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="http://www.twitter.com/@WarriorsFIM/">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.facebook.com/WarriorsLabs/">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#"></a>
            </li>
            <li class="list-inline-item">
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



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

  </body>

</html>
