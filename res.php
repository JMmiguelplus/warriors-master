<?php
  $cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
  $conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
      $nombre = $_POST['nombre'];
      $consulta = "SELECT * FROM datos1 WHERE codigo = '$nombre'";
      $resultado = pg_query($conexion, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
      while ($columna = pg_fetch_array($resultado)) { ?>
          <div id="openModal" class="modalDialog">
              <div>
                  <a href="#close" title="Close" class="close">X</a>
                  <center><h2>Status Actual</h2></center>
                  <br>
                  <table width="100%">
                      <tr>
                          <td>Nombre</td>
                          <td>e-mail</td>
                          <td>fecha inicio</td>
                          <td>fecha final</td>
                          <td>Tipo de licencia</td>
                      </tr>
                      <tr>
                          <td><?php echo $columna['nombre'] ?></td>
                          <td><?php echo $columna['email'] ?></td>
                          <td><?php echo $columna['fecha_inicio'] ?></td>
                          <td><?php echo $columna['fecha_inicio'] ?></td>
                          <td><?php echo $columna['licencia'] ?></td>
                      </tr>
                  </table>
              </div>
          </div>

      <?php } ?>
