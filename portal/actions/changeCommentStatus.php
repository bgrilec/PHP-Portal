<?php 

require_once "functions.php";
require_once "dbConnection.php";

$id_komentara = dataFilter('id_komentara', 'i');
$status_komentara = dataFilter('status', 'i');
				
$sql = "UPDATE komentar
		SET status=:status 
		WHERE id_komentara=:id_komentara;";
		
$stmt = $pdo -> prepare($sql);
$status = $stmt -> execute(array(':status'=>$status_komentara,
								 ':id_komentara'=>$id_komentara));

if ($status){
	echo 0;
}else {
	echo 1;
}

?>