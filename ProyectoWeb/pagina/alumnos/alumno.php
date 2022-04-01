<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Alumnos</title>
    <!-- CDN de Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fontasome-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../index.css">
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
            <a href = "../alumnos/alumno.php">Alumnos</a>
        </div>
    </header>

    <hr>


        <div class="conteiner p-4 contenedorAlumnos">
            <?php include("conexion.php");
                        if(isset($_SESSION['message'])){?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?=  $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } #Libera todas las variables de sesión ?>
            

                <div class="col-md-8 mx-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Edad</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $query = "SELECT * FROM alumno";
                                        $result = mysqli_query($conn, $query);
                                        while($row = mysqli_fetch_array($result)){ 
                                        #Obtiene una fila de resultados como un array asociativo, numérico, o ambos
                            ?>
                            <tr>
                                <td><?php echo $row['idAlumno'] ?></td>
                                <td><?php echo $row['edad'] ?></td>
                                <td><?php echo $row['nombrePila'] ?></td>
                                <td><?php echo $row['apellidoPaterno'] ?></td>
                                <td><?php echo $row['apellidoMaterno'] ?></td>
                                <td>

                                    <a href="eliminar.php?idAlumno=<?php echo $row['idAlumno']?>" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> 
        
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