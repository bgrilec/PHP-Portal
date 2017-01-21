<?php
	require_once "../../actions/dbConnection.php";
	require_once "../../actions/functions.php";
	
	$searchData = strtolower(dataFilter('searchData', 's'));
	$orderBy = dataFilter('orderBy', 'i');
	
	if ($orderBy == 1){
		if ($searchData != ""){
			$sql = "SELECT k.id_korisnika AS id_korisnika,
						   k.id_uloge AS id_uloge,
						   u.naziv AS naziv_uloge,
						   k.ime AS ime,
						   k.prezime AS prezime,
						   k.adresa AS adresa,
						   k.mjesto AS mjesto,
						   k.drzava AS drzava,
						   k.email AS email,
						   k.lozinka AS lozinka
					FROM korisnik k INNER JOIN uloga u ON(k.id_uloge = u.id_uloge)
					WHERE LOWER(ime) LIKE '%$searchData%'
					OR LOWER(prezime) LIKE '%$searchData%'
					OR LOWER(email) LIKE '%$searchData%'
					ORDER BY ime ASC, prezime ASC, email ASC;";
		}else {
			$sql = "SELECT k.id_korisnika AS id_korisnika,
						   k.id_uloge AS id_uloge,
						   u.naziv AS naziv_uloge,
						   k.ime AS ime,
						   k.prezime AS prezime,
						   k.adresa AS adresa,
						   k.mjesto AS mjesto,
						   k.drzava AS drzava,
						   k.email AS email,
						   k.lozinka AS lozinka
					FROM korisnik k INNER JOIN uloga u ON(k.id_uloge = u.id_uloge)
					ORDER BY ime ASC, prezime ASC, email ASC;";
		}
				
	}elseif ($orderBy == 2){
		if ($searchData != ""){
			$sql = "SELECT id_firme,
						   naziv,
						   adresa,
						   mjesto,
						   drzava,
						   web_url,
						   logo_url,
						   email
					FROM firma
					WHERE LOWER(naziv) LIKE '%$searchData%'
					OR LOWER(email) LIKE '%$searchData%'
					ORDER BY naziv ASC, email ASC;";
		}else {
			$sql = "SELECT id_firme,
						   naziv,
						   adresa,
						   mjesto,
						   drzava,
						   web_url,
						   logo_url,
						   email
					FROM firma
					ORDER BY naziv ASC, email ASC;";
		}
				
	}else {
		$sql = "SELECT k.id_korisnika AS id_korisnika,
					   k.id_uloge AS id_uloge,
					   u.naziv AS naziv_uloge,
					   k.ime AS ime,
					   k.prezime AS prezime,
					   k.adresa AS adresa,
					   k.mjesto AS mjesto,
					   k.drzava AS drzava,
					   k.email AS email,
					   k.lozinka AS lozinka
				FROM korisnik k INNER JOIN uloga u ON(k.id_uloge = u.id_uloge)
				ORDER BY ime ASC, prezime ASC, email ASC;";
	}

?>
<table>
	<tr>
		<th>Redni broj</th>
		<th><?php if (isset($orderBy) && $orderBy == 2){ echo 'Naziv firme'; } else { echo 'Ime i prezime'; }?></th>
		<th>Email</th>
		<th></th>
		<th></th>
	</tr>
	<?php		
				
		$stmt = $pdo -> prepare($sql);
		$stmt -> execute();
		$result = $stmt -> fetchAll(PDO::FETCH_OBJ);
		$i = 1;
		foreach ($result as $res){
			echo '<tr>
					<td>'.$i++.'</td>';
					if (isset($orderBy) && $orderBy == 2){ 
						echo '<td>'.$res -> naziv.'</td>'; 
					}else { 
						echo '<td>'.$res -> ime. ' ' .$res -> prezime.'</td>'; 
					}
					echo '<td>'.$res -> email.'</td>'; ?>
					<?php if (isset($orderBy) && $orderBy == 2){ ?>
					<td><i class="ion-edit" onclick="ActivateModal('modal-firmData', 'close-firmData', 'c',   '<?php echo $res -> id_firme; ?>',
																											  '<?php echo $res -> naziv; ?>',
																											  '<?php echo $res -> adresa; ?>',
																											  '<?php echo $res -> mjesto; ?>',
																											  '<?php echo $res -> drzava; ?>',
																											  '<?php echo $res -> web_url; ?>',
																											  '<?php echo $res -> logo_url; ?>',
																											  '<?php echo $res -> email; ?>');"></i></td>
					<td><i class="ion-trash-a" onclick="deleteFrom('firma', 'id_firme', '<?php echo $res -> id_firme; ?>', 'includes/page_components/usersAdmin.php', 'main-page-content-admin', '', '<?php echo $res -> logo_url; ?>');"></i></td>
					<?php } else { ?>
					<td><i class="ion-edit" onclick="ActivateModal('modal-addUser', 'close-addUser', 'c', '<?php echo $res -> id_korisnika; ?>',
																										  '<?php echo $res -> id_uloge; ?>',
																										  '<?php echo $res -> ime; ?>',
																										  '<?php echo $res -> prezime; ?>',
																										  '<?php echo $res -> adresa; ?>',
																										  '<?php echo $res -> mjesto; ?>',
																										  '<?php echo $res -> drzava; ?>',
																										  '<?php echo $res -> email; ?>');"></i></td>
					<td><i class="ion-trash-a" onclick="deleteFrom('korisnik', 'id_korisnika', '<?php echo $res -> id_korisnika; ?>', 'includes/page_components/usersAdmin.php', 'main-page-content-admin');"></i></td>
   <?php } echo '</tr>';
		} 
	?>
</table>