<?php
    //se importa el archivo de configuracion de la base de datos
   include '../Configuracion/config.php';
   session_start();
   
   $usuarioVerificado = $_SESSION['usuario_loggeado'];
   
   $ses_sql = mysqli_query($db,"select nombrePila from alumno where nombrePila = '$usuarioVerificado' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $sesion_loggeada = $row['nombrePila'];
   
   if(!isset($_SESSION['usuario_loggeado'])){
      header("location: ../acceso/acceso.php");
      die();
   }
?>