<?php
    include ("conexion.php");
    if (isset($_GET['idAlumno'])){    
        $id = $_GET['idAlumno'];
        
        $delete = "DELETE FROM alumno WHERE idAlumno = $id";

        if (mysqli_query($conn, $delete)){
            $_SESSION['message'] = 'Registro borrado exitosamente';
            $_SESSION['message_type'] = 'danger'; # Funcion de bootstrap
            header('Location: alumno.php'); # Redireccionar el archivo
        }else{
            echo "Error al borrar registro: " . mysqli_error($conn);
        }
    }
?>