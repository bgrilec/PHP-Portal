<?php 

require_once "functions.php";
require_once "dbConnection.php";

$id_firme = dataFilter('id_firme', 'i');
$pwd = dataFilter('pwd', 's');
$pwd_repeat = dataFilter('pwd_repeat', 's');

if ($pwd === $pwd_repeat){
	$pwd_hash = password_hash($pwd, PASSWORD_DEFAULT, ['cost' => 12]);
	$sql = "UPDATE firma
			SET lozinka=:lozinka
			WHERE id_firme=:id_firme;";
		
	$stmt = $pdo -> prepare($sql);
	$check = $stmt -> execute(array(':lozinka'=>$pwd_hash,
						   ':id_firme'=>$id_firme));
	

	if ($check){
		echo 0;
	}else {
		echo 3;
	}
	
}else {
	echo 2;
}

?>