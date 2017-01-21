<?php

session_start();
require_once "functions.php";
require_once "dbConnection.php";

$id_clanka = dataFilter('id_clanka', 'i');
$komentar = dataFilter('komentar', 's');
$korisnik = dataFilter('korisnik', 's');
$email = dataFilter('email', 's');
$status = 1;
$datum_vrijeme_objave = date("Y-m-d H:i:s");

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	die('2');
}

$sql = "INSERT INTO komentar 
		(id_clanka, komentar, ime_prezime, email, datum_vrijeme_objave, status) 
		VALUES 
		(:id_clanka, :komentar, :ime_prezime, :email, :datum_vrijeme_objave, :status);";
		
$stmt = $pdo -> prepare($sql);
$status = $stmt -> execute(array(':id_clanka'=>$id_clanka, 
								   ':komentar'=>$komentar, 
								   ':ime_prezime'=>$korisnik, 
								   ':email'=>$email, 
								   ':datum_vrijeme_objave'=>$datum_vrijeme_objave,
								   ':status'=>$status));

if ($status){
	echo 1;
}else {
	echo 0;
}


?>