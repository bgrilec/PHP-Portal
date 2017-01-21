<?php
	
	require_once "functions.php";
	require_once "dbConnection.php";

	$table = dataFilter('table', 's');
	$pk = dataFilter('pk', 's');
	
	if (is_string($_POST['pkValue'])){
		$pkValue = dataFilter('pkValue', 's');
	}else {
		$pkValue = dataFilter('pkValue', 'i');
	}
	
	$sql = "DELETE FROM $table WHERE $pk=:pkValue;";
	$stmt = $pdo -> prepare($sql);
	$stmt -> execute(array(':pkValue'=>$pkValue));
	
	if ($stmt -> rowCount() > 0){
		$ispis = "Brisanje zapisa uspješno je provedeno!";
		if (isset($_POST['img_url']) && $_POST['img_url'] != ""){
			$img = dataFilter('img_url', 's');
			$full_path = $_SERVER['DOCUMENT_ROOT'].'/portal/'.$img;
			if (file_exists($full_path)) {
				unlink($full_path);
				$ispis .= "\nSlika je također uklonjena sa servera!";
			}
		}
	}else {
		$ispis = "Brisanje zapisa nije uspjelo!";
	}
	
	echo $ispis;
	
?>