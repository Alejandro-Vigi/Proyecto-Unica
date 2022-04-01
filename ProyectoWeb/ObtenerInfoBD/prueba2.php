<?php

	//archivo en donde se tienen las instrucciones de mostrar los datos traidos de la base en JSON

	include "obtener_datosAlumno.php"; 
	include "obtener_datosProfesor.php"; 
	include "obtener_datosCurso.php"; 
	include "obtener_datosInscripcion.php"; 
	
	echo $alumnosDatos;
	echo "<hr>";
	echo $profesoresDatos;
	echo "<hr>";
	echo $cursosDatos;
	echo "<hr>";
	echo $inscripcionesDatos;
?> 
