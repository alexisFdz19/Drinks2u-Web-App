<?php
    session_start();
    require('./process/conexion.php');

    if(!isset($_SESSION["id_usuario"])){
        header("./bienvenido.php");
    }
    
    $idUsuario = $_SESSION['id_usuario'];
    $sql = "select usuario from cliente where id = '$idUsuario'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Drinks2u</title>
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>

      <!--Favicon-->
      <link rel="icon" href="img/logonav.ico">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body id="bodybienvenido">
    <nav class="yellow" role="navigation">
        <div class="nav-wrapper">
          <a href="index.php" id="logo-container" class="brand-logo">Drinks2u</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="menu">menu</i></a>


          <!-- Menu -->
          <ul class="right hide-on-med-and-down">
            <li><a href="bebidas.php">Bebidas</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><?php if($_SESSION['id_usuario']==0) { ?><a href="registro.php" id="registrate">Registrarse</a><?php } ?></li>
            <li><a href="process/logout.php" id="Ingresa">Cerrar Sesi&oacute;n</a></li>
            <li><a class= "black-text" href="carrito.php"><i class= "material-icons">shopping_cart</i></a></li>
          </ul>
          <!-- Menu responsivo en mobiles-->
          <ul class="side-nav" id="mobile-demo">
          <h5>Menú</h5>
            <li><a href="bebidas.php"><i class= "material-icons">stars</i>Bebidas</a></li>
            <li><a href="nosotros.html"><i class= "material-icons">info_outline</i>Nosotros</a></li>
            <li><a href="contacto.html"><i class= "material-icons">assignment_ind</i>Contacto</a></li>
            <li><?php if($_SESSION['id_usuario']==0) { ?><a href="registro.php" id="registrate">Registrarse</a><?php } ?></li>
            <li><a href="process/logout.php" id="Ingresa">Cerrar Sesi&oacute;n</a></li>
            <li><a href="carrito.php"><i class= "material-icons">shopping_cart</i>Carrito</a></li>
          </ul>
        </div>
      </nav>
   
   <div class="container" id="main">
    <center><h1><?php echo 'Bienvenido '.($row['usuario']); ?></h1></center>
    <br>
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