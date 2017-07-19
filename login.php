<?php
    require ('./process/conexion.php');
    session_start();

    if(isset($_SESSION["id_usuario"])){
        header("Location: ./bienvenido.php");
    }

    if(!empty($_POST)){
        $email = mysqli_real_escape_string($mysqli,$_POST['email']);
        $password = mysqli_real_escape_string($mysqli,$_POST['password']);
        $error = '';
        $sha1_pass = sha1($password);
        $sql = "select id from cliente where email = '$email' and password = '$sha1_pass'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        
        if($rows>0){
            $row = $result->fetch_assoc();
            $_SESSION['id_usuario'] = $row['id'];
            header("location: ./bienvenido.php");
        }else{
            $error = 'El correo o contraseña son incorrectos';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Inicia sesión</title>

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
  <div class="section"></div>
  <main>
    <center>
    
      <img class="responsive-img" style="width: 250px"; />
      <div class="section"></div>
    
      <h5>Inicia sesion con tu cuenta Drinks2u</h5>

      <div class="section"></div>
      <div class="container">
        <div class="z-depth-1 lighten-4 row" id="bodylogin" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? ($error) : '' ; ?></div>
          <form class="col s12" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row' align="left">
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' required="" />
                <label for='email'>Ingresa tu correo electronico</label>
              </div>
            </div>

            <div class='row' align="left">
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required="" />
                <label for='password'>Ingresa tu contraseña</label>
              </div>
              <label style='float: right;'>
								<a href='#!'><b>¿Olvidaste tu contraseña?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 grey btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
          
        </div>
      </div>
      <a href="registro.php">Crear cuenta</a>
    </center>
    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
  
  
</body>
</html>