<?php
    session_start();
    include 'process/conexion.php';
    if(isset($_SESSION['carrito'])){
      if(isset($_GET['id'])){
            $arreglo=$_SESSION['carrito'];
            $encontro=false;
            $numero=0;
            for($i=0;$i<count($arreglo);$i++){
              if($arreglo[$i]['Id']==$_GET['id']){
                $encontro=true;
                $numero=$i;
              }
            }
            if($encontro==true){
              //$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
              $_SESSION['carrito']=$arreglo;
            }else{
              $nombre="";
              $precio=0;
              $imagen="";
              include 'process/conexion.php';
              $re=mysqli_query($mysqli, "select * from bebida where beb_id=".$_GET['id']);
              while ($f=mysqli_fetch_array($re,MYSQLI_ASSOC)){
                $nombre=$f['beb_nombre'];
                $precio=$f['beb_precio'];
                $imagen=$f['beb_imagen'];
              }
              $datosNuevos=array('Id'=>$_GET['id'],
                               'Nombre'=>$nombre,
                               'Precio'=>$precio,
                               'Imagen'=>$imagen,
                               'Cantidad'=>1);
              array_push($arreglo, $datosNuevos);
              $_SESSION['carrito']=$arreglo;

          }
      }

    }else{
      if(isset($_GET['id'])){
        $nombre="";
        $precio=0;
        $imagen="";
        include 'process/conexion.php';
        $re=mysqli_query($mysqli, "select * from bebida where beb_id=".$_GET['id']);
        while ($f=mysqli_fetch_array($re,MYSQLI_ASSOC)){
          $nombre=$f['beb_nombre'];
          $precio=$f['beb_precio'];
          $imagen=$f['beb_imagen'];
        }
        $arreglo[]=array('Id'=>$_GET['id'],
                         'Nombre'=>$nombre,
                         'Precio'=>$precio,
                         'Imagen'=>$imagen,
                         'Cantidad'=>1);
        $_SESSION['carrito']=$arreglo;
      }
    }

?>



<!DOCTYPE html>
  <html lang="ESP-MX">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title>Carrito de compras</title>

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

    <body id="bodycarrito">
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
      
      <div class="container" id="main">
        <div class="row"> 
        
        <?php

            $total=0;
          if(isset($_SESSION['carrito'])){
            $datos=$_SESSION['carrito'];
            
            for($i=0;$i<count($datos);$i++){

        ?>

       
          <div class="col s12 m3 l3">
                <div class="card ">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img src="./img/bebidas/<?php echo $datos[$i]['Imagen'];?>">
                  </div>
                  <div class="card-content" style="padding: 0px" >
                    <p><?php echo $datos[$i]['Nombre'];?></p>
                    <p>Precio: $<?php echo $datos[$i]['Precio'];?></p>
                    <span>Cantidad: 
                    <input size="1px" type="number" min="1" max="10" value="<?php echo $datos[$i]['Cantidad'];?>" data-precio="<?php echo $datos[$i]['Precio'];?>" data-id="<?php echo $datos[$i]['Id'];?>" class="cantidad" />
                    </span>
                    
                    <p class="subtotal">Subtotal: $<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></p>
                  </div>
                </div>
          </div>



        <?php
            $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
            }

          }else{
            echo '<center><h2>Aun no hay productos en el carrito</h2><center>';
          } 
          echo '<div class="col s12"><center><h2 id="total">Total: $'.$total.'</h2></center></div>';

          if($total!=0){
          echo '<div class="col s12"><center><a href="process/compras.php" class="waves-effect waves-light btn red white-text">Realizar pedido</a></center></div>';
          }

        ?>
        </div>
      </div>
        <center><a href="bebidas.php" class="waves-effect waves-light btn grey black-text">Seguir comprando</a></center>
        <br>

  </body>

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
      <script type="text/javascript" src="js/scripts.js"></script>
      <script>
        $(document).ready(function(){
          $('.slider').slider();
          $(".button-collapse").sideNav();
        });
      </script>
    </body>
  </html>