<?php 

	/*Coexion con la base de datos
	$host = "localhost"; 
	$dbname = "proyectocursos"; 
	$username = "root"; 
	$password = ""; 
	try { 
		$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password); 
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); } 
	catch (PDOException $exception){ 
		die("Connection error: " . $exception->getMessage()); 
	} */

	//definimos constantes para hacer la conexion con la base de datos
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'proyectocursos');

   //se abre una nueva conexion con el servidor de MySQL
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?> 
