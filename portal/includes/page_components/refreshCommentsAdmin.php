<?php

require_once "../../actions/dbConnection.php";
require_once "../../actions/functions.php";

$searchData = strtolower(dataFilter('searchData', 's'));
$orderBy = dataFilter('orderBy', 'i');

if ($orderBy == 1){
	if ($searchData != ""){
		$sql = "SELECT k.id_komentara AS id_komentara,
					   c.naslov AS naslov_clanka,
					   k.komentar AS komentar,
					   k.ime_prezime AS ime_prezime,
					   k.email AS email,
					   DATE_FORMAT(k.datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
					   k.status AS status
				FROM komentar k INNER JOIN clanak c ON(k.id_clanka = c.id_clanka)
				WHERE LOWER(komentar) LIKE '%$searchData%'
				AND status=1
				ORDER BY datum_vrijeme_objave DESC;";
	}else {
		$sql = "SELECT k.id_komentara AS id_komentara,
					   c.naslov AS naslov_clanka,
					   k.komentar AS komentar,
					   k.ime_prezime AS ime_prezime,
					   k.email AS email,
					   DATE_FORMAT(k.datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
					   k.status AS status
				FROM komentar k INNER JOIN clanak c ON(k.id_clanka = c.id_clanka)
				WHERE status=1
				ORDER BY datum_vrijeme_objave DESC;";
	}
	
}elseif ($orderBy == 2) {
	if ($searchData != ""){
		$sql = "SELECT k.id_komentara AS id_komentara,
					   c.naslov AS naslov_clanka,
					   k.komentar AS komentar,
					   k.ime_prezime AS ime_prezime,
					   k.email AS email,
					   DATE_FORMAT(k.datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
					   k.status AS status
				FROM komentar k INNER JOIN clanak c ON(k.id_clanka = c.id_clanka)
				WHERE LOWER(komentar) LIKE '%$searchData%'
				AND status=0
				ORDER BY datum_vrijeme_objave DESC;";
	}else {
		$sql = "SELECT k.id_komentara AS id_komentara,
					   c.naslov AS naslov_clanka,
					   k.komentar AS komentar,
					   k.ime_prezime AS ime_prezime,
					   k.email AS email,
					   DATE_FORMAT(k.datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
					   k.status AS status
				FROM komentar k INNER JOIN clanak c ON(k.id_clanka = c.id_clanka)
				WHERE status=0
				ORDER BY datum_vrijeme_objave DESC;";
	}
}

if($orderBy==0 || empty($orderBy)){
	if ($searchData != ""){
		$sql = "SELECT k.id_komentara AS id_komentara,
					   c.naslov AS naslov_clanka,
					   k.komentar AS komentar,
					   k.ime_prezime AS ime_prezime,
					   k.email AS email,
					   DATE_FORMAT(k.datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
					   k.status AS status
				FROM komentar k INNER JOIN clanak c ON(k.id_clanka = c.id_clanka)
				WHERE LOWER(komentar) LIKE '%$searchData%'
				ORDER BY datum_vrijeme_objave DESC;";
	}else {
		$sql = "SELECT k.id_komentara AS id_komentara,
					   c.naslov AS naslov_clanka,
					   k.komentar AS komentar,
					   k.ime_prezime AS ime_prezime,
					   k.email AS email,
					   DATE_FORMAT(k.datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
					   k.status AS status
				FROM komentar k INNER JOIN clanak c ON(k.id_clanka = c.id_clanka)
				ORDER BY datum_vrijeme_objave DESC;";
	}
}

?>
<table>
	<tr>
		<th>Redni broj</th>
		<th>Komentar</th>
		<th>Datum i vrijeme</th>
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
				<td>'.$res -> komentar.'</td>
				<td>'.$res -> datum_vrijeme_objave.'</td>
				<td>'.$status.'</td>'; ?>
				<td><i class="ion-edit" onclick="ActivateModal('modal-changeCommentAdmin', 'close-changeCommentAdmin', 'c',   '<?php echo $res -> id_komentara; ?>',
																											  '<?php echo $res -> naslov_clanka; ?>',
																											  '<?php echo $res -> komentar; ?>',
																											  '<?php echo $res -> ime_prezime; ?>',
																											  '<?php echo $res -> email; ?>',
																											  '<?php echo $res -> datum_vrijeme_objave; ?>',
																											  '<?php echo $res -> status; ?>');"></i></td>
				<td><i class="ion-trash-a" onclick="deleteFrom('komentar', 'id_komentara', '<?php echo $res -> id_komentara; ?>', 'includes/page_components/commentsAdmin.php', 'main-page-content-admin');"></i></td>
 <?php echo '</tr>'; 
		}?>
</table>