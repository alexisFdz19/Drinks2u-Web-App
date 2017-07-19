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
            <li><a href="bebidas.php">Inicio</a></li>
            <li><a href=>Admin</a></li>
            <li><a href=>Agregar</a></li>
            <li><a id="Registrate">Salir</a></li>
            <li><a href="login.php" id="Ingresa"></a></li>
            <li><a class= "black-text" href="carrito.php"><i class= "material-icons">shopping_cart</i></a></li>
          </ul>
          <!-- Menu responsivo en mobiles-->
          <ul class="side-nav" id="mobile-demo">
          <h5>Menú</h5>
            <li><a href="bebidas.php"><i class= "material-icons">stars</i>Inicio</a></li>
            <li><a href=><i class= "material-icons">info_outline</i>Admin</a></li>
            <li><a href=><i class= "material-icons">assignment_ind</i>Agregar</a></li>
            <li><a href=><i class= "material-icons">perm_identity</i>Salir</a></li>
            <li><a href=><i class= "material-icons">vpn_key</i>Ingresa</a></li>
            <li><a href="carrito.php"><i class= "material-icons">shopping_cart</i>Carrito</a></li>
          </ul>
        </div>
      </nav>
      <br>
      

      <!-- Pasos de la compra -->
      <div class="container">
        <div class="row">
            <center><h4>Ultimos Pedidos</h4></center>
          </div>

          <table id="tablaproductos" width="100%" bgcolor="#fff9c4" >
            <tr>
              <td>Imagen</td>
              <td>Nombre</td>
              <td>Precio</td>
              <td>Cantidad</td>
              <td>Subtotal</td>
              <td>Total</td>
              <td>Cliente</td>
              <td>Estado</td>
            </tr>

            <?php
            include 'process/conexion.php';
              $re=mysqli_query($mysqli, "select * from pedidos");
              $numeroventa=0;
              while ($f=mysqli_fetch_array($re)) {
                if($numeroventa !=$f['ped_numeroventa']){
                  echo '<tr><td>Pedido Número: '.$f['ped_numeroventa'].' </td></tr>';
                }
                $numeroventa=$f['ped_numeroventa'];
                echo '<tr>
                    <td><img src="img/bebidas/'.$f['ped_imagen'].'" width="100px" heigth="100px" /></td>
                    <td>'.$f['ped_nombre'].'</td>
                    <td>'.$f['ped_precio'].'</td>
                    <td>'.$f['ped_cantidad'].'</td>
                    <td>'.$f['ped_subtotal'].'</td>

                    </tr>';

              }

            ?>

          </table>

          </div>
        </div>
      </div>
      <br>
      
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