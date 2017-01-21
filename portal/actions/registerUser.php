<?php 

session_start();

require_once "functions.php";
require_once "dbConnection.php";

$uloga = dataFilter('uloga', 'i');
$ime = dataFilter('ime', 's');
$prezime = dataFilter('prezime', 's');
$adresa = dataFilter('adresa', 's');
$mjesto = dataFilter('mjesto', 's');
$drzava = dataFilter('drzava', 's');
$email = dataFilter('email', 'e');
$pwd = dataFilter('pwd', 's');
$pwd_repeat = dataFilter('pwd_repeat', 's');


if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	die('2');
}

$sql = "SELECT email
		FROM korisnik
		WHERE email = :email;";
		
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(":email", $email, PDO::PARAM_STR);
$stmt -> execute();		
$result = $stmt -> fetchAll(PDO::FETCH_OBJ);

if ($stmt -> rowCount() != 0){
	die('4');
}

if ($pwd !== $pwd_repeat){
	die('3');
}

$pwd_hash = password_hash($pwd, PASSWORD_DEFAULT, ['cost' => 12]);					
$sql = "INSERT INTO korisnik 
		(id_uloge, ime, prezime, adresa, mjesto, drzava, email, lozinka) 
		VALUES 
		(:id_uloge, :ime, :prezime, :adresa, :mjesto, :drzava, :email, :lozinka);";
		
$stmt = $pdo -> prepare($sql);
$stmt -> execute(array(':id_uloge'=>$uloga, ':ime'=>$ime, ':prezime'=>$prezime, ':adresa'=>$adresa, ':mjesto'=>$mjesto, ':drzava'=>$drzava, ':email'=>$email, ':lozinka'=>$pwd_hash));

if ($stmt -> rowCount() > 0){
	echo 0;
}else {
	echo 5;
}

?>