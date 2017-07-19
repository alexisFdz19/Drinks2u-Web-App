<?php
    require ('./process/conexion.php');
    
    $bandera = false;
    
    if(!empty($_POST)){
        $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
        $nombres = mysqli_real_escape_string($mysqli,$_POST['nombres']);
        $apellidos = mysqli_real_escape_string($mysqli,$_POST['apellidos']);
        $cumpleanos = mysqli_real_escape_string($mysqli,$_POST['cumpleanos']);
        $password = mysqli_real_escape_string($mysqli,$_POST['password']);
        $direccion = mysqli_real_escape_string($mysqli,$_POST['direccion']);
        $telefono = mysqli_real_escape_string($mysqli,$_POST['telefono']);
        $email = mysqli_real_escape_string($mysqli,$_POST['email']);
        $sha1_pass = sha1($password);

        $error = '';

        $sqlUser = "select id from cliente where email = '$email'";
        $resultUser=$mysqli->query($sqlUser);
        $rows = $resultUser->num_rows;

        if ($rows > 0) {
          $error = "El correo ya esta registrado";
        }else{
           $sqlUsuario = "insert into cliente (usuario, nombres, apellidos, cumpleanos, password, direccion, telefono, email) values('$usuario', '$nombres', '$apellidos', '$cumpleanos', '$sha1_pass', '$direccion', '$telefono', '$email')";
            $resultUsuario = $mysqli->query($sqlUsuario);
            
            if($resultUsuario>0){
            $bandera = true;
          }
            else{
            $error = "Error al Registrar";
          }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Registro</title>

    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body id="container-page-registration">

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
      <br>



    <section id="form-registration">
        <div class="container" id="pasos">
            <div class="row">
        
                <div class="col s12">
                  <h4>Registro de usuarios Drinks2u</h4>
                  <hr>
                  <br>
                </div>
                
                <div class="col s12 col l6">

                    <p align="center"><i class="large material-icons">person_pin</i></p>

                    <p class="lead">
                        Al registrarse podras realizar pedidos de tus bebidas favoritas aqui en nuestra tienda.
                    </p>
                    <br>
                    <img src="img/licores.png" alt="Licores" class="responsive-img">
                </div>

                <div class="col s12 col l6">
                   <br><br>
                    <div id="container-form">
                       <p style="color:black;" class="text-center lead">Debera de llenar todos los campos para registrarse</p>
                       <br>
                          <?php if($bandera) { ?>
                            <!--<h1>Registro exitoso</h1>
                              <a href="./redirect.php">Regresar</a>-->
                              <?php header("Location: ./bienvenido.php"); }else{ ?>
                              <br />
                              <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? ($error) : '' ; ?></div>
                            <?php } ?>
                            <br>
                       <form id="registro" name="registro" class="form-horizontal FormCatElec" action="<?php $_SERVER['PHP_SELF']; ?>" role="form" method="POST">
                         <div class="form-group">

                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">perm_identity</i></div>
                                <input id="usuario" class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus nombre de usuario" required name="usuario" data-toggle="tooltip" data-placement="top" title="Ingrese sus nombres.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                              </div>
                              <br>
                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">perm_identity</i></div>
                                <input id="nombres" class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus nombres" required name="nombres" data-toggle="tooltip" data-placement="top" title="Ingrese sus nombres.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="30">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">perm_identity</i></div>
                                <input id="apellidos" class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus apellidos" required name="apellidos" data-toggle="tooltip" data-placement="top" title="Ingrese sus apellido(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">redeem</i></div><input type="text" placeholder="Ingrese su fecha de nacimiento" name="cumpleanos" id="cumpleanos" required="" >
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">lock</i></div>
                                <input class="form-control all-elements-tooltip" type="password" placeholder="Introdusca una contraseña" required name="password" id="password" data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">location_on</i></div>
                                <input id="direccion" class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su dirección" required name="direccion" data-toggle="tooltip" data-placement="top" title="Ingrese la direción en la reside actualmente" maxlength="100">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">call</i></div>
                                <input id="telefono" class="form-control all-elements-tooltip" type="tel" placeholder="Ingrese su número telefónico" required name="telefono" maxlength="11" pattern="[0-9]{8,11}" data-toggle="tooltip" data-placement="top" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 11">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons">email</i></div>
                                <input id="email" class="form-control all-elements-tooltip" type="email" placeholder="Ingrese su Email" required name="email" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email" maxlength="50">
                              </div>
                            </div>
                            <br>


                            <br>
                            <br>
                            <p><!--<div><input name="registrar" type="button" value="Registrar" onclick="validar();"></div>-->
                            <button name="registro" type="submit" class="grey btn btn-success btn-block"><i class="fa fa-pencil"></i>&nbsp; Registrarse</button></p>
                            <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </section>

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
      <!-- Scrip Nav mobile -->
      <script>
        $(document).ready(function(){
          $('.slider').slider();
          $(".button-collapse").sideNav();
        });
      </script>
      <!-- Scrip selector fecha de nacimoento -->
      <script>
        $('.datepicker').pickadate({
         selectMonths: true, // Creates a dropdown to control month
         selectYears: 15 // Creates a dropdown of 15 years to control year
        });
      </script>
      <script>
          $(document).ready(function() {
          $('select').material_select();
        });
          
      </script>

</body>
</html>