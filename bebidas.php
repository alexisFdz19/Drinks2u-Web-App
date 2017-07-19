<!DOCTYPE html>
  <html lang="ESP-MX">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title>Bebidas</title>

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Favicon-->
      <link rel="icon" href="img/logonav.ico">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav class="yellow" role="navigation">
        <div class="nav-wrapper">
          <a href="index.php" id="logo-container" class="brand-logo">Drinks2u</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="menu">menu</i></a>


          <!-- Menu -->
          <ul class="right hide-on-med-and-down">
            <li><a href="bebidas.php">Bebidas</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><a href="registro.php" id="Registrate">Registrarse</a></li>
            <li><a href="login.php" id="Ingresa">Ingresa</a></li>
            <li><a class= "black-text" href="carrito.php"><i class= "material-icons">shopping_cart</i></a></li>
          </ul>
          <!-- Menu responsivo en mobiles-->
          <ul class="side-nav" id="mobile-demo">
          <h5>Menú</h5>
            <li><a href="bebidas.php"><i class= "material-icons">stars</i>Bebidas</a></li>
            <li><a href="nosotros.html"><i class= "material-icons">info_outline</i>Nosotros</a></li>
            <li><a href="contacto.html"><i class= "material-icons">assignment_ind</i>Contacto</a></li>
            <li><a href="registro.php" id="Registrate"><i class= "material-icons">perm_identity</i>Registrate</a></li>
            <li><a href="login.php" id="Ingresa"><i class= "material-icons">vpn_key</i>Ingresa</a></li>
            <li><a href="carrito.php"><i class= "material-icons">shopping_cart</i>Carrito</a></li>
          </ul>
        </div>
      </nav>
      <br>

      <div class="container">
        <div class="row">
          <div class="col s12">
            <h4>Tienda Drinks2u</h4>
            <hr id="lineahr">
          </div>
        </div>
      </div>


      <div class="container" align="right">
          <div class="row">
            
            
            

            <div class="col s12">
              <a class="waves-effect waves-light btn grey black-text">Todas las bebidas</a>

                <!-- Boton de categorias -->
                <a class='dropdown-button btn grey black-text' href='#' data-activates='dropdown1'>Categorias</a>

                <!-- Lista de categorias -->
                <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="#!">Cerveza</a></li>
                  <li><a href="#!">Tequila</a></li>
                  <li class="divider"></li>
                  <li><a href="#!">Otros</a></li>
                </ul>
            </div>

          </div>
      </div>

      

      <div class="container">
          <div class="row">

          <?php

          include 'process/conexion.php';
          $re=mysqli_query($mysqli,"select * from bebida")or die(mysqli_error());
          while ($f=mysqli_fetch_array($re)) {

          ?>


            <div class="col l3 s12 m3">
                <div class="card small">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/bebidas/<?php echo $f['beb_imagen'];?>">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?php echo $f['beb_nombre'];?><i class="material-icons right">more_vert</i></span>
                    <p>$<?php echo $f['beb_precio'];?></p>
                    <a href="carrito.php?id=<?php echo $f['beb_id'];?>" class="waves-effect waves-light btn-small yellow black-text">Agregar al carrito</a>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                    <p><?php echo $f['beb_descripcion'];?></p>
                  </div>
                </div>
            </div> 
            <?php
        }
        ?>     

          </div>
      </div>

    <!-- Pie de pagina -->
      <footer class="page-footer black">
          <div class="container" id="pasos">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contacto</h5>
                <p class="grey-text text-lighten-4"><i class= "tiny material-icons" id="paso3">mail</i>bussines_drinks2u@outlook.com<br>
                <i class= "tiny material-icons" id="paso3">phone</i> 984-165-2701<br>
                <i class= "tiny material-icons" id="paso3">location_on</i>Calle Punta Payil, Fraccionamiento La Guadalupana, Playa del Carmen, Quintana Roo.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Síguenos</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><img id="facebook" src="img/facebook.png">Drinks2U</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img id="twitter" src="img/twitter.png">@Drinks2U</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img id="instagram" src="img/instagram.png">@Drinks2U</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container" id="pasos">
            © 2017 Drinks2U
            
            </div>
          </div>
        </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.slider').slider();
          $(".button-collapse").sideNav();
        });
      </script>
    </body>
  </html>