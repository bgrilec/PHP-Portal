<?php 

require_once "functions.php";
require_once "dbConnection.php";

$id_firme = dataFilter('id_firme', 'i');
$naziv = dataFilter('naziv', 's');
$mjesto_rada = dataFilter('mjesto_rada', 's');
$job_url = dataFilter('job_url', 's');
$start_date = dataFilter('start_date', 's');
$stop_date = dataFilter('stop_date', 's');
$status = 0;

$dan_od = date('d', strtotime($start_date));
$mje_od = date('m', strtotime($start_date));
$god_od = date('Y', strtotime($start_date));

$datum_od = "$god_od-$mje_od-$dan_od";

$dan_do = date('d', strtotime($stop_date));
$mje_do = date('m', strtotime($stop_date));
$god_do = date('Y', strtotime($stop_date));

$datum_do = "$god_do-$mje_do-$dan_do";

				
$sql = "INSERT INTO posao
		(id_firme, radno_mjesto, mjesto_rada, posao_url, datum_vrijeme_objave, datum_do, status) 
		VALUES 
		(:id_firme, :radno_mjesto, :mjesto_rada, :posao_url, :datum_vrijeme_objave, :datum_do, :status);";
		
$stmt = $pdo -> prepare($sql);
$status = $stmt -> execute(array(':id_firme'=>$id_firme,
							     ':radno_mjesto'=>$naziv, 
							     ':mjesto_rada'=>$mjesto_rada, 
							     ':posao_url'=>$job_url,
							     ':datum_vrijeme_objave'=>$datum_od, 
							     ':datum_do'=>$datum_do,
							     ':status'=>$status));

if ($status){
	echo 0;
}else {
	echo 1;
}

?>