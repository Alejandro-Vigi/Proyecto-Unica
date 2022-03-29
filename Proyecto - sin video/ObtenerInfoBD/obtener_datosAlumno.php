<?php 
	//se incluye el archivo de configuracion para conectarse a la base de datos
	include "../Configuracion/config.php"; 
	$datosAlumnos = array(); 
	//se hace una consulta de los alumnos
	$query = $db->prepare("SELECT * FROM alumno ORDER BY idAlumno"); 
	//se ejecuta la consulta
	$query->execute(); 
	//se traen los alumnos al programa
	$data = $query->fetchAll(); 
	foreach ($data as $row): 
		$id = $row['idAlumno']; 
		$nombre = $row['nombrePila']; 
		$apellido = $row['apellidoPaterno']; 
		$metodoPago = $row['metodoPago']; 
		$edad = $row['edad']; 
		$datosAlumnos[] = array("id" => $id, "nombre" => $nombre, "apellido" => $apellido, "pago" => $metodoPago, "edad" => $edad); 
	endforeach; // Encoding array in JSON format 

	//los datos en forma de arreglo están así: $datosAlumnos
	//los datos en forma de JSON están así: $alumnosDatos
	$alumnosDatos = json_encode($datosAlumnos);
?> 
