<?php 

require_once "functions.php";
require_once "dbConnection.php";

$id_firme = dataFilter('id_firme', 'i');
$web = dataFilter('web', 's');
$logo = dataFilter('logo', 's');
$naziv = dataFilter('naziv', 's');
$adresa = dataFilter('adresa', 's');
$mjesto = dataFilter('mjesto', 's');
$drzava = dataFilter('drzava', 's');
$email = dataFilter('email', 'e');


if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	die('2');
}

$sql = "SELECT email
		FROM firma
		WHERE email = :email
		AND id_firme != :id_firme;";
		
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(":email", $email, PDO::PARAM_STR);
$stmt -> bindValue(":id_firme", $id_firme, PDO::PARAM_STR);
$stmt -> execute();		
$result = $stmt -> fetchAll(PDO::FETCH_OBJ);

if ($stmt -> rowCount() != 0){
	die('3');
}

$sql = "UPDATE firma
		SET naziv=:naziv,  
			adresa=:adresa, 
			mjesto=:mjesto, 
			drzava=:drzava,
			logo_url=:logo_url, 
			web_url=:web_url,
			email=:email
		WHERE id_firme=:id_firme;";
		
$stmt = $pdo -> prepare($sql);
$status = $stmt -> execute(array(':naziv'=>$naziv,
					   ':adresa'=>$adresa, 
					   ':mjesto'=>$mjesto, 
					   ':drzava'=>$drzava,
					   ':logo_url'=>$logo, 
					   ':web_url'=>$web, 
					   ':email'=>$email, 
					   ':id_firme'=>$id_firme));

if ($status){
	echo 0;
}else {
	echo 4;
}


?>