

<?php
//se manda a llamar el archivo que consigue los datos de la base de datos
include "../../Configuracion/config.php";
session_start();

//se comprueba un metodo post
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myusername = mysqli_real_escape_string($db,$_POST['usuario']);
    $mypassword = mysqli_real_escape_string($db,$_POST['contraseña']);

   // usuario y contraeña enviados desde el formulario   
   //$myusername = $_POST['usuario'];
   //$mypassword = $_POST['contraseña']; 
   
   $sql = "SELECT * FROM alumno WHERE nombrePila = '$myusername' and apellidoPaterno = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $count = mysqli_num_rows($result);


   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
      //session_register("myusername");
      $_SESSION['usuario_loggeado'] = $myusername;
      
      echo "FUNCIONA";
      header("location: ../index.php");
   }else {
      $error = "Tu login no fue correcto";
   }
}
?>




<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="shortcut icon" href="../img/acceso2.png">    
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <title>Acceso a la página</title>
</head>
<body>

    <header>
        <div class = "logo-header">
            <img src = "../img/logo.png">
            <a href = "../index.php">Inicio</a>
            <a href = "acceso.php">Acceso</a>
            <a href = "../acercaDe/acerca_de.php">Acerca de</a>
            <a href = "../formulario/formulario.php">Formulario</a>
            <a href = "../libre/libre.php">Libre</a>
            <a href = "../alumnos/alumno.php">Alumnos</a>
        </div>
    </header> 
    <hr>
    <div>
        <h1 style="text-align:center">
            Acceso
        </h1>
        
        <!--Formulario para botones-->
        <form action="" method="post">
            <div class="contenedor-imagen" style="background-color:#ebebeb;">
                <img src="../img/icon.jpeg" alt="Avatar" class="avatar">
            </div>
            
            <div class="container">
                <label for="usuario"><b>Usuario</b></label>
                <input type="text" name="usuario" placeholder="Ingrese su nombre de usuario" required>
            
                <label for="contraseña"><b>Contraseña</b></label>
                <input type="password" name="contraseña" placeholder="Ingrese su contraseña" required>

            </div>

            <div>
                <input type="submit" style="background-color: rgb(4, 101, 170); color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;" value="Iniciar Sesion">
            </div>

            <div class="containerCancelar" style="background-color:#ebebeb;">
                <button class="boton boton-cancelar" type="button" onClick="document.location.reload(true)">Cancelar</button>
            </div>
        </form>

    </div>

    <footer class = "footer">
        <div class = "iconos-footer">
            <a href = "https://facebook.com" ><img src = "../img/facebook.png"></a>
            <a href = "https://messenger.com" ><img src = "../img/messenger.png"></a>
            <a href = "https://instagram.com" ><img src = "../img/instagram.png"></a>
            <a href = "https://twitter.com" ><img src = "../img/twitter.png"></a>
            <a href = "https://www.whatsapp.com/" ><img src = "../img/whatsapp.png"></a>
        </div>
        <div class = "derechos">
                <h1>© All rights reserved 2022</h1>
        </div>
    </footer>

</body>
</html>