<?php

session_start();

require_once "functions.php";
require_once "dbConnection.php";

$email = dataFilter('email', 'e');
$pwd = dataFilter('pwd', 's');


if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	die('2');
}

$sql = "SELECT id_firme,
			   naziv,
			   adresa,
			   mjesto,
			   drzava,
			   web_url,
			   logo_url,
			   email,
			   lozinka
		FROM firma
		WHERE email = :email;";
		
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(":email", $email, PDO::PARAM_STR);
$stmt -> execute();

$result = $stmt -> fetchAll(PDO::FETCH_OBJ);

foreach ($result as $res){
	$id_firme = $res -> id_firme;
	$naziv = $res -> naziv;
	$adresa = $res -> adresa;
	$mjesto = $res -> mjesto;
	$drzava = $res -> drzava;
	$web_url = $res -> web_url;
	$logo_url = $res -> logo_url;
	$email_f = $res -> email;
	$pwd_f = $res -> lozinka;
}

isset($pwd_f) ? $pwd_f = $pwd_f : $pwd_f = "";
if (password_verify($pwd, $pwd_f)){
	$_SESSION['firm']['id_firme'] = $id_firme;
	$_SESSION['firm']['naziv'] = $naziv;
	$_SESSION['firm']['adresa'] = $adresa;
	$_SESSION['firm']['mjesto'] = $mjesto;
	$_SESSION['firm']['drzava'] = $drzava;
	$_SESSION['firm']['web_url'] = $web_url;
	$_SESSION['firm']['logo_url'] = $logo_url;
	$_SESSION['firm']['email'] = $email;
	
	die(0);
}
	
$sql = "SELECT id_korisnika,
			   id_uloge,
			   ime,
			   prezime,
			   adresa,
			   mjesto,
			   drzava,
			   email,
			   lozinka
		FROM korisnik
		WHERE email = :email;";
	
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(":email", $email, PDO::PARAM_STR);
$stmt -> execute();

$result = $stmt -> fetchAll(PDO::FETCH_OBJ);

foreach ($result as $res){
	$id_korisnika = $res -> id_korisnika;
	$id_uloge = $res -> id_uloge;
	$ime = $res -> ime;
	$prezime = $res -> prezime;
	$adresa_k = $res -> adresa;
	$mjesto_k = $res -> mjesto;
	$drzava_k = $res -> drzava;
	$email_k = $res -> email;
	$pwd_k = $res -> lozinka;
}

isset($pwd_k) ? $pwd_k = $pwd_k : $pwd_k = "";
if (password_verify($pwd, $pwd_k)){
	$_SESSION['user']['id_korisnika'] = $id_korisnika;
	$_SESSION['user']['id_uloge'] = $id_uloge;
	$_SESSION['user']['ime'] = $ime;
	$_SESSION['user']['prezime'] = $prezime;
	$_SESSION['user']['adresa'] = $adresa_k;
	$_SESSION['user']['mjesto'] = $mjesto_k;
	$_SESSION['user']['drzava'] = $drzava_k;
	$_SESSION['user']['email'] = $email_k;
	
	echo 0;	
}

if (!password_verify($pwd, $pwd_k) && !password_verify($pwd, $pwd_f)){
	echo 3;
}

?>