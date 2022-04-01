<?php
   session_start();
   
   //comentario
   if(session_destroy()) {
        header("location: ../pagina/acceso/acceso.php");
   }
?>   