<?php
   include '../ObtenerInfoBD/sesion.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Inicio</title>

    <!--Hace que el navegador renderice todos los elementos más consistentemente con standars-->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">

    <!--Fuentes de google-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=".img/logo.png">
</head>

<body>

    <header>
        <div class = "logo-header">
            <img src = "img/logo.png">
            <a href = "#Software">Software</a>
            <a href = "#Inicio">Inicio</a>
            <a href = "acceso/acceso.php">Acceso</a>
            <a href = "acercaDe/acerca_de.php">Acerca de</a>
            <a href = "formulario/formulario.php">Formulario</a>
            <a href = "libre/libre.php">Libre</a>
            <a href = "alumnos/alumno.php">Alumnos</a>
        </div>
    </header>

        <section class="hero" id = "Inicio">
            <div class="hero-text">
                <h1 style="font-size:30px">Bienvenido a la página <?php echo $sesion_loggeada; ?></h1>
                <p>Cursos sobre programación y desarrollo web</p>
                <button><a href = "../ObtenerInfoBD/salirSesion.php" style="text-decoration: none; color:black;">Cerrar sesión</a></button>
            </div>
        </section>

    <main class="contenedorCursos">
        <!--Voy a poner el main de nuestra pagina. Y lo iré modificando-->
        <div class = "logo-main" id = "Software">
            <img src = "img/logo2.jpeg">
            <h2>Cursos disponibles:</h2>
        </div>
        
        <!-- Mejor ponemos en el contenedor, aunque editemos cosas de dentro-->
        <div class="contenedorCurso tres-columnas">
            <article class="entrada-blog">
                <h1>CSS</h1>
                <img src="img/css.jpg" class="imagenCurso">
                    <p>CSS (en inglés Cascading Style Sheets) es lo que se denomina lenguaje de hojas de estilo en cascada y se usa para estilizar elementos escritos en un lenguaje de marcado como HTML. CSS separa el contenido de la representación visual del sitio.</p>
                    <a href="#">Leer más</a> 
            </article>
       
            <article class="entrada-blog">
                <h1>Javascript</h1>
                <img src="img/js.jpeg" class="imagenCurso">
                    <p>JavaScript es el lenguaje de programación que debes usar para añadir características interactivas a tu sitio web, (por ejemplo, juegos, eventos que ocurren cuando los botones son presionados o los datos son introducidos en los formularios, efectos de estilo dinámicos, animación, y mucho más).</p>
                    <a href="#">Leer más</a>
            </article>
       
            <article class="entrada-blog">
                <h1>HTML</h1>
                <img src="img/html.jpg" class="imagenCurso">        
                    <p>El lenguaje html (hypertext markup language) se utiliza para el desarrollo y creación de páginas web. Se compone de una serie de etiquetas que el navegador interpreta. Entre las etiquetas que se incluyen dentro del lenguaje HTML se encuentran: hipervínculos, etiquetas para imágenes, saltos de página, entre otras.</p>
                    <a href="#">Leer más</a>
               </article>
        </div>
    </main>
     <br>
  
    <footer class = "footer">
        <div class = "iconos-footer">
            <a href = "https://facebook.com" ><img src = "img/facebook.png"></a>
            <a href = "https://messenger.com" ><img src = "img/messenger.png"></a>
            <a href = "https://instagram.com" ><img src = "img/instagram.png"></a>
            <a href = "https://twitter.com" ><img src = "img/twitter.png"></a>
            <a href = "https://www.whatsapp.com/" ><img src = "img/whatsapp.png"></a>
        </div>
        <div class = "derechos">
                <h1>© All rights reserved 2022</h1>
        </div>
    </footer>

</body>
