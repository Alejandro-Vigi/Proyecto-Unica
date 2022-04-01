<?php 
	//se incluye el archivo de configuracion para conectarse a la base de datos
	include "../Configuracion/config.php"; 
	$datosCursos = array(); 
	//se hace una consulta de los cursos
	$query = $db->prepare("SELECT * FROM curso ORDER BY idCurso"); 
	//se ejecuta la consulta
	$query->execute(); 
	//se traen los cursos al programa
	$dataC = $query->fetchAll(); 
	foreach ($dataC as $row): 
		$idC = $row['idCurso']; 
		$nombreC = $row['nombreCurso']; 
		$descripC = $row['descripcion']; 
		$dificultadC = $row['dificultad']; 
		$datosCursos[] = array("id" => $idC, "nombre" => $nombreC, "descripcion" => $descripC, "dificultad" => $dificultadC); 
	endforeach; // Encoding array in JSON format 

    $cursosDatos = json_encode($datosCursos);
?> 