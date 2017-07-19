<!DOCTYPE html>
  <html lang="ESP-MX">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title>Drinks2u</title>

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
      
      <!-- Slider principal -->
      <section>
            <div class="col s12">
                  <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="img/foto1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3><b>Bebidas más a tu alcance</b></h3>
                      <h5 class="light white-text text-lighten-3">Próximamente en Playa del Carmen.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="img/foto2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                      <h3><b>Cervezas</b></h3>
                      <h5 class="light white-text text-lighten-3">Para empezar la reunion.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="img/foto3.png"> <!-- random image -->
                    <div class="caption right-align">
                      <h3><b>Mezcal</b></h3>
                      <h5 class="light white-text text-lighten-3">Para un ambiente más prendido.</h5>
                    </div>
                  </li>
                </ul>
              </div>
          </div>
      </section>

      <!-- Pasos de la compra -->
      <div class="container">
          <div class="row">
            <center><h4>TUS BEBIDAS A DOMICILIO EN 4 PASOS</h4></center>
          </div>

          <div class="row">
            <div class="col s12 m3">
              <div class="card-panel white">
                <span class="black-text">
                <center><i class= "medium material-icons" id="paso3">perm_identity</i></center>
                <h4 align="center">Accede</h4>
                </span>
                <p align="center">Regístrate o ingresa con tu usuario y contraseña.</p>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="card-panel white">
                <span class="black-text">
                <center><i class= "medium material-icons" id="paso3">search</i></center>
                <h4 align="center">Busca</h4>
                </span>
                <p align="center">Busca o elige tu bebida favorita en el cátalogo.</p>
              </div>
            </div> 
            <div class="col s12 m3">
              <div class="card-panel white">
                <span class="black-text">
                <center><i class= "medium material-icons" id="paso3">playlist_add</i></center>
                <h4 align="center">Añade</h4>
                </span>
                <p align="center">Añade tus productos a tu carrito de pedido.</p>
              </div>
            </div> 
            <div class="col s12 m3">
              <div class="card-panel white">
                <span class="black-text">
                <center><i class= "medium material-icons" id="paso3">done</i></center>
                <h4 align="center">Pedido</h4>
                </span>
                <p align="center">Recibe tus bebidas a domicilio, paga y listo.</p>
              </div>
            </div> 
            </div>  
          </div>
      </div>

          </div>
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