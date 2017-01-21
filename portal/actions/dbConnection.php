<?php

	//Database Connnection Constants
	define('DB_HOST', '127.0.0.1');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'portal');

	try {
		$pdo = new PDO (
			'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',
			DB_USER,
			DB_PASS
		);
	} 
	catch (PDOException $e){
		echo 'Konekcija na bazu podataka nije uspjela!';
		exit;
	}
	
?>