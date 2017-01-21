<div class="firm-page">
	<div id="firm-data">
	<?php
	
		require_once "actions/dbConnection.php";
		
		$id_firme = $_SESSION['firm']['id_firme'];

		$sql = "SELECT naziv,
					   adresa,
					   mjesto,
					   drzava,
					   logo_url,
					   web_url,
					   email
				FROM firma
				WHERE id_firme=:id_firme;";

		$stmt = $pdo -> prepare($sql);
		$stmt -> bindValue(":id_firme", $id_firme, PDO::PARAM_INT);
		$stmt -> execute();		
		$result = $stmt -> fetchAll(PDO::FETCH_OBJ);
		foreach ($result as $res){
			$naziv = $res -> naziv;
			$adresa = $res -> adresa;
			$mjesto= $res -> mjesto;
			$drzava = $res -> drzava;
			$logo = $res -> logo_url;
			$web = $res -> web_url;
			$email = $res -> email;
		}

		echo '
		<h1>Podaci profila</h1>
		<div class="firm-data-logo-details">
			<img src="'.$logo.'" alt="'.$naziv.' Logo" class="firm-logo">
			<div class="firm-data-details">';
				
		   echo '<p class="fdd-paragraph"><b>Naziv firme:</b> '.$naziv.'</p>
				 <p class="fdd-paragraph"><b>Adresa:</b> '.$adresa.'</p>
				 <p class="fdd-paragraph"><b>Mjesto:</b> '.$mjesto.'</p>
				 <p class="fdd-paragraph"><b>Država:</b> '.$drzava.'</p>
				 <p class="fdd-paragraph"><b>Web URL:</b> <a href="'.$web.'" target="_blank" id="fdd-firm-url">'.$naziv.'</a></p>
				 <p class="fdd-paragraph"><b>Email:</b> '.$email.'</p>';
			
			?>						
			</div>
		</div>
		<div class="firm-data-change">
			<a class="btn-comment btn-firm-data" onclick="ActivateModal('modal-changeFirmData', 'close-changeFirmData', 'n', '<?php echo $naziv; ?>',
																															 '<?php echo $adresa; ?>',
																															 '<?php echo $mjesto; ?>',
																															 '<?php echo $drzava; ?>',
																															 '<?php echo $logo; ?>',
																															 '<?php echo $web; ?>',
																															 '<?php echo $email; ?>',
																															 '<?php echo $id_firme; ?>');";>Promjena podataka</a>
			<a class="btn-comment btn-firm-data" onclick="ActivateModal('modal-changePass', 'close-changePass', 'n', '<?php echo $id_firme; ?>');">Promjena lozinke</a>
			<a class="btn-comment btn-firm-data" onclick="ActivateModal('modal-offerJob', 'close-offerJob', 'n', '<?php echo $id_firme; ?>');")>Ponudite posao</a>
		</div>
	</div>
	<div id="firm-jobs">
		<h2>Radna mjesta</h2>
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

			$sql = "SELECT id_posla,
						   radno_mjesto,
						   mjesto_rada,
						   posao_url,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
						   DATE_FORMAT(datum_vrijeme_objave, '%Y-%m-%d') AS datum_vrijeme_objave_chrome,
						   datum_do AS datum_do_chrome,
						   status
					FROM posao
					WHERE id_firme=:id_firme
					ORDER BY datum_vrijeme_objave DESC;";

			$stmt = $pdo -> prepare($sql);
			$stmt -> bindValue(":id_firme", $id_firme, PDO::PARAM_INT);
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
						<td><i class="ion-edit" onclick="ActivateModal('modal-changeJob', 'close-changeJob', 'c',   '<?php echo $res -> id_posla; ?>',
																													  '<?php echo $res -> radno_mjesto; ?>',
																													  '<?php echo $res -> mjesto_rada; ?>',
																													  '<?php echo $res -> posao_url; ?>',
																													  '<?php echo $res -> datum_vrijeme_objave; ?>',
																													  '<?php echo $res -> datum_do; ?>',
																													  '<?php echo $res -> datum_vrijeme_objave_chrome; ?>',
																													  '<?php echo $res -> datum_do_chrome; ?>');"></i></td>
						<td><i class="ion-trash-a" onclick="deleteFrom('posao', 'id_posla', '<?php echo $res -> id_posla; ?>');"></i></td>
		 <?php echo '</tr>'; 
			}?>
		</table>
	</div>
</div>