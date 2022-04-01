<?php  
    session_start(); #Inicia una secion o reanuda una exixtente
    $servername = "localhost";   #Localhost o IP
    $username = "root";          #Usuario de la dB
    $password = "";   #Contraseña de la dB
    $database = "proyectocursos";       #Nombre de la db
    $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
        die("Conexion no establecida: " . mysqli_connect_error());
        }
        #mysqli_connect_error()
        #devuelve una cadena con la descripcion del ultimo error de conexión
?>