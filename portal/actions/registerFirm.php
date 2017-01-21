<?php 

require_once "functions.php";
require_once "dbConnection.php";


$naziv = dataFilter('naziv', 's');
$email = dataFilter('email', 'e');
$pwd = dataFilter('pwd', 's');
$pwd_repeat = dataFilter('pwd_repeat', 's');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	die('2');
}elseif ($pwd !== $pwd_repeat){
	die('3');
}

$sql = "SELECT email
		FROM firma
		WHERE email = :email;";
		
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(":email", $email, PDO::PARAM_STR);
$stmt -> execute();		
$result = $stmt -> fetchAll(PDO::FETCH_OBJ);

if ($stmt -> rowCount() != 0){
	die('4');
}

$pwd_hash = password_hash($pwd, PASSWORD_DEFAULT, ['cost' => 12]);					
$sql = "INSERT INTO firma 
		(naziv, email, lozinka) 
		VALUES 
		(:naziv, :email, :lozinka);";
		
$stmt = $pdo -> prepare($sql);
$stmt -> execute(array(':naziv'=>$naziv, ':email'=>$email, ':lozinka'=>$pwd_hash));

if ($stmt -> rowCount() > 0){
	echo 0;
}else {
	echo 5;
}

?>