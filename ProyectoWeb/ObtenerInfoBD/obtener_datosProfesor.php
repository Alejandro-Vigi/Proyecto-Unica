<?php 
	//se incluye el archivo de configuracion para conectarse a la base de datos
	include "../Configuracion/config.php"; 
	$datosProfesores = array(); 
	//se hace una consulta de los profesores
	$query = $db->prepare("SELECT * FROM profesor ORDER BY idProfesor"); 
	//se ejecuta la consulta
	$query->execute(); 
	//se traen los alumnos al programa
	$dataP = $query->fetchAll(); 
	foreach ($dataP as $row): 
		$idP = $row['idProfesor']; 
		$nombreP = $row['nombrePila']; 
		$apellidoP = $row['apellidoPaterno']; 
		$gradoEstudios = $row['gradoEstudios']; 
		$datosProfesores[] = array("id" => $idP, "nombre" => $nombreP, "apellido" => $apellidoP, "gradoEstudios" => $gradoEstudios, "edad" => $edad); 
	endforeach; // Encoding array in JSON format 

    $profesoresDatos = json_encode($datosProfesores);
?> 