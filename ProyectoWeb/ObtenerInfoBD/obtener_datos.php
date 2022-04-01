<?php 
	//se incluye el archivo de configuracion para conectarse a la base de datos
	include "../Configuracion/config.php"; 
	$return_arr = array(); 
	//se hace una consulta de los alumnos
	$query = $db->prepare("SELECT * FROM alumno ORDER BY nombrePila"); 
	//se ejecuta la consulta
	$query->execute(); 
	//se traen los alumnos al programa
	$data = $query->fetchAll(); 
	foreach ($data as $row): 
		$id = $row['idAlumno']; 
		$nombre = $row['nombrePila']; 
		$apellido = $row['apellidoPaterno']; 
		$return_arr[] = array("id" => $id, "nombre" => $nombre, "apellido" => $apellido); 
	endforeach; // Encoding array in JSON format 

	echo json_encode($return_arr); 
?> 
