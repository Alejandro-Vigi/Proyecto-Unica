<?php
   include '../../ObtenerInfoBD/sesionSecundaria.php';
?>

<!DOCTYPE html>
<html> 

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/acerca.png">
    <title>Acerca de</title>

</head>

<body>

    <header>
        <div class = "logo-header">
            <img src = "../img/logo.png">
            <a href = "../index.php">Inicio</a>
            <a href = "../acceso/acceso.php">Acceso</a>
            <a href = "acerca_de.php">Acerca de</a>
            <a href = "../formulario/formulario.php">Formulario</a>
            <a href = "../libre/libre.php">Libre</a>
            <a href = "../alumnos/alumno.php">Alumnos</a>
        </div>
    </header>
    <!--Separacion horizontal para cambio temático-->
    <hr>
    <h2>Futuros Ingenieros</h2>
        <div class = "contenedor_acerca dos_columnas">
            <article class = "acerca">
                <h3>Marco Antonio Sánchez Pérez</h3>
                <img src = "../img/MarcoAntonio.jpeg">
                <ol class = "lista_ordenada">
                    <li><h6>Estudiante de Ingenieria en Computación</h6></li>
                    <li><h6>Universidad: Facultad de Ingenieria - UNAM</h6></li>
                    <li><h6>Semestre actual: 6to Semestre</h6></li>
                    <li><h6>Area de interes en la carrera: </h6></li>
                </ol>
            </article>

            <article class = "acerca">
                <h3>Marco Alejandro Vigi Garduño</h3>
                <img src = "../img/MarcoAlejandro.jpg">
                <ol class = "lista_ordenada">
                    <li><h6>Estudiante de Ingenieria en Computación</h6></li>
                    <li><h6>Universidad: Facultad de Ingenieria - UNAM</h6></li>
                    <li><h6>Semestre actual: 2do Semestre</h6></li>
                    <li><h6>Area de interes en la carrera: Algoritmos</h6></li>
                </ol>
            </article>
        </div>
        <hr>
        <h2>Facultad de Ingenieria - UNAM</h2>
        <div class = "ingenieria">
            <video width = "400px" height = "300px" controls>
                <source src = "video/Facultad de Ingeniería 2018.mp4" type="video/mp4">
            </video>
        </div>
        <hr>
    <section class = "carrusel">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
        </div>
        
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/fac1.jpg"style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/fac2.jpg"style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/fac3.jpeg"style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/fac4.jpeg"style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/fac5.jpeg"style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/fac6.jpeg"style="width:100%">
            </div>
        </div>
        
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    </section>
    <hr>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
