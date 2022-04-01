<?php
    //se importa el archivo de configuracion de la base de datos
    $path = $_SERVER['SERVER_NAME'];
    include ($path."/Proyecto-Unica/ProyectoWeb/Configuracion/config.php");
    session_start();
   
    $usuarioVerificado2 = $_SESSION['usuario_loggeado'];
   
    $ses_sq12 = mysqli_query($db,"select nombrePila from alumno where nombrePila = '$usuarioVerificado2' ");
   
    $row2 = mysqli_fetch_array($ses_sq12,MYSQLI_ASSOC);
   
    $sesion_loggeada2 = $row2['nombrePila'];
   
    if(!isset($_SESSION['usuario_loggeado'])){
        header("location:../acceso/acceso.php");
        die();
    }
?>