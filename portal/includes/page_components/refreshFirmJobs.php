<?php

	require_once "../../actions/dbConnection.php";
	require_once "../../actions/functions.php";
	
	$searchData = strtolower(dataFilter('searchData', 's'));
	$orderBy = dataFilter('orderBy', 'i');
	
	if ($orderBy == 1){
		if ($searchData != ""){
			$sql = "SELECT p.id_posla AS id_posla,
						   f.naziv AS naziv_firme,
						   p.radno_mjesto AS radno_mjesto,
						   p.mjesto_rada AS mjesto_rada,
						   p.posao_url AS posao_url,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
						   DATE_FORMAT(datum_vrijeme_objave, '%Y-%m-%d') AS datum_vrijeme_objave_chrome,
						   datum_do AS datum_do_chrome,
						   p.status AS status
					FROM posao p INNER JOIN firma f ON (p.id_firme = f.id_firme)
					WHERE LOWER(radno_mjesto) LIKE '%$searchData%'
					AND status=1
					ORDER BY datum_vrijeme_objave DESC;";
		}else {
			$sql = "SELECT p.id_posla AS id_posla,
						   f.naziv AS naziv_firme,
						   p.radno_mjesto AS radno_mjesto,
						   p.mjesto_rada AS mjesto_rada,
						   p.posao_url AS posao_url,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
						   DATE_FORMAT(datum_vrijeme_objave, '%Y-%m-%d') AS datum_vrijeme_objave_chrome,
						   datum_do AS datum_do_chrome,
						   p.status AS status
					FROM posao p INNER JOIN firma f ON (p.id_firme = f.id_firme)
					WHERE status=1
					ORDER BY datum_vrijeme_objave DESC;";
		}
		
	}elseif ($orderBy == 2) {
		if ($searchData != ""){
			$sql = "SELECT p.id_posla AS id_posla,
						   f.naziv AS naziv_firme,
						   p.radno_mjesto AS radno_mjesto,
						   p.mjesto_rada AS mjesto_rada,
						   p.posao_url AS posao_url,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
						   DATE_FORMAT(datum_vrijeme_objave, '%Y-%m-%d') AS datum_vrijeme_objave_chrome,
						   datum_do AS datum_do_chrome,
						   p.status AS status
					FROM posao p INNER JOIN firma f ON (p.id_firme = f.id_firme)
					WHERE LOWER(radno_mjesto) LIKE '%$searchData%'
					AND status=0
					ORDER BY datum_vrijeme_objave DESC;";
		}else {
			$sql = "SELECT p.id_posla AS id_posla,
						   f.naziv AS naziv_firme,
						   p.radno_mjesto AS radno_mjesto,
						   p.mjesto_rada AS mjesto_rada,
						   p.posao_url AS posao_url,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
						   DATE_FORMAT(datum_vrijeme_objave, '%Y-%m-%d') AS datum_vrijeme_objave_chrome,
						   datum_do AS datum_do_chrome,
						   p.status AS status
					FROM posao p INNER JOIN firma f ON (p.id_firme = f.id_firme)
					WHERE status=0
					ORDER BY datum_vrijeme_objave DESC;";
		}
	}
	
	if($orderBy==0 || empty($orderBy)){
		if ($searchData != ""){
			$sql = "SELECT p.id_posla AS id_posla,
						   f.naziv AS naziv_firme,
						   p.radno_mjesto AS radno_mjesto,
						   p.mjesto_rada AS mjesto_rada,
						   p.posao_url AS posao_url,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
						   DATE_FORMAT(datum_vrijeme_objave, '%Y-%m-%d') AS datum_vrijeme_objave_chrome,
						   datum_do AS datum_do_chrome,
						   p.status AS status
					FROM posao p INNER JOIN firma f ON (p.id_firme = f.id_firme)
					WHERE LOWER(radno_mjesto) LIKE '%$searchData%'
					ORDER BY datum_vrijeme_objave DESC;";
		}else {
			$sql = "SELECT p.id_posla AS id_posla,
						   f.naziv AS naziv_firme,
						   p.radno_mjesto AS radno_mjesto,
						   p.mjesto_rada AS mjesto_rada,
						   p.posao_url AS posao_url,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
						   DATE_FORMAT(datum_vrijeme_objave, '%Y-%m-%d') AS datum_vrijeme_objave_chrome,
						   datum_do AS datum_do_chrome,
						   p.status AS status
					FROM posao p INNER JOIN firma f ON (p.id_firme = f.id_firme)
					ORDER BY datum_vrijeme_objave DESC;";
		}
	}

?>
<table>
	<tr>
		<th>Redni broj</th>
		<th>Radno mjesto</th>
		<th>Datum do</th>
		<th>Status</th>
		<th></th>
		<th></th>
	</tr>
	<?php
	
	$stmt = $pdo -> prepare($sql);
	$stmt -> execute();		
	$result = $stmt -> fetchAll(PDO::FETCH_OBJ);
	$i = 1;
	foreach ($result as $res){
		if ($res -> status == 0){
			$status = "Nije odobreno";
		}else {
			$status = "Odobreno";
		}
		echo '<tr>
				<td>'.$i++.'</td>
				<td>'.$res -> radno_mjesto.'</td>
				<td>'.$res -> datum_do.'</td>
				<td>'.$status.'</td>'; ?>
				<td><i class="ion-edit" onclick="ActivateModal('modal-changeJobAdmin', 'close-changeJobAdmin', 'c',   '<?php echo $res -> id_posla; ?>',
																											  '<?php echo $res -> radno_mjesto; ?>',
																											  '<?php echo $res -> mjesto_rada; ?>',
																											  '<?php echo $res -> posao_url; ?>',
																											  '<?php echo $res -> datum_vrijeme_objave; ?>',
																											  '<?php echo $res -> datum_do; ?>',
																											  '<?php echo $res -> status; ?>',
																											  '<?php echo $res -> naziv_firme; ?>',
																											  '<?php echo $res -> datum_vrijeme_objave_chrome; ?>',
																											  '<?php echo $res -> datum_do_chrome; ?>');"></i></td>
				<td><i class="ion-trash-a" onclick="deleteFrom('posao', 'id_posla', '<?php echo $res -> id_posla; ?>', 'includes/page_components/jobsAdmin.php', 'main-page-content-admin', '1');"></i></td>
 <?php echo '</tr>'; 
	}?>
</table>