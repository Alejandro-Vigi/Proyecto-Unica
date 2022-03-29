<?php 
	//se incluye el archivo de configuracion para conectarse a la base de datos
	include "../Configuracion/config.php"; 
	$datosInscripciones = array(); 
	//se hace una consulta de las inscripciones
	$query = $db->prepare("SELECT * FROM inscribe"); 
	//se ejecuta la consulta
	$query->execute(); 
	//se traen las inscripciones al programa
	$dataI = $query->fetchAll(); 
	foreach ($dataI as $row): 
		$idC = $row['idCurso']; 
        $idA = $row['idAlumno']; 
		$fechaI = $row['fecha'];  
		$datosInscripciones[] = array("idC" => $idC, "idA" => $idA, "fecha" => $fechaI); 
	endforeach; // Encoding array in JSON format 

    $inscripcionesDatos = json_encode($datosInscripciones);
?> 