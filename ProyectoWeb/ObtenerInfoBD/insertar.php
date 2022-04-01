<?php 


//Aqui va la conexcion/
include "../Configuracion/config.php";
//$conexion = mysqli_connect("localhost","root","12345678","proyectoCursos");

if(isset($_POST['enviar'])) {
	    $email = trim($_POST['correo']);
		$names = trim($_POST['nombres']);
		$surnames = trim($_POST['apellidos']);
		$comment = trim($_POST['comentario']);
	    $consulta = "INSERT INTO formulario (correo, nombres, apellidos, comentario) VALUES ('$email','$names','$surnames' ,'$comment')";
		$resultado = mysqli_query($conexion,$consulta);

?>