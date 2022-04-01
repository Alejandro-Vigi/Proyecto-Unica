<?php
   include '../../ObtenerInfoBD/sesionSecundaria.php';
   include '../../Configuracion/config.php';
   mysqli_set_charset($db, 'utf8'); 


    if($_SERVER["REQUEST_METHOD"] == "POST") {
    //if(isset($_POST['enviar'])) {
        $email = $_POST['correo'];
        $names = trim($_POST['nombres']);
        $surnames = trim($_POST['apellidos']);
        $comment = $_POST['comentario'];
        $consulta = "INSERT INTO formulario (correo, nombres, apellidos, comentario) VALUES ('$email','$names','$surnames' ,'$comment')";
        $resultado = mysqli_query($db,$consulta);
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/form.png">
    <title>Formulario</title>
</head>

<body>

    <header>
        <div class = "logo-header">
            <img src = "../img/logo.png">
            <a href = "../index.php">Inicio</a>
            <a href = "../acceso/acceso.php">Acceso</a>
            <a href = "../acercaDe/acerca_de.php">Acerca de</a>
            <a href = "formulario.php">Formulario</a>
            <a href = "../libre/libre.php">Libre</a>
            <p href = "#"></p>
        </div>
    </header>
    <hr>
    <form class="formulario" method="post">
        <input class = "form" type = "email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
        <input class = "form" type = "text" name="nombres" id="nombres" placeholder="Ingrese sus Nombres" required>
        <input class = "form" type = "text" name="apellidos" id="apellidos" placeholder="Ingrese sus Apellidos" required>
        <input class = "form" type = "text" name = "comentario" id = "comentario" placeholder = "Ingrese su comentario" required>
        <input class = "enviar-button" type = "submit" name = "enviar">
    </form>
    

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
