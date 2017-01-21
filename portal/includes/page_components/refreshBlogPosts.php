<?php

	require_once "../../actions/dbConnection.php";
	require_once "../../actions/functions.php";
	
	$searchData = strtolower(dataFilter('searchData', 's'));
	$orderBy = dataFilter('orderBy', 'i');
	
	if ($orderBy == 1){
		if ($searchData != ""){
			$sql = "SELECT c.id_clanka AS id_clanka,
						   c.id_kategorije_clanka AS id_kategorije_clanka,
						   kc.naziv AS naziv_kategorije_clanka,
						   c.id_korisnika AS id_korisnika,
						   k.ime AS ime_korisnika,
						   k.prezime AS prezime_korisnika,
						   c.naslov AS naslov,
						   c.sadrzaj AS sadrzaj,
						   c.seo_naslov AS seo_naslov,
						   c.seo_opis AS seo_opis,
						   c.foto_url AS foto_url,
						   c.foto_alt_tag AS foto_alt_tag,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_vrijeme_izmjene, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_izmjene,
						   c.pozicija AS pozicija,
						   c.broj_pregleda AS broj_pregleda
					FROM clanak c INNER JOIN kategorija_clanka kc ON (c.id_kategorije_clanka = kc.id_kategorije_clanka)
								  INNER JOIN korisnik k ON (c.id_korisnika = k.id_korisnika)
					WHERE LOWER(naslov) LIKE '%$searchData%'
					AND c.id_kategorije_clanka=1
					ORDER BY datum_vrijeme_objave DESC;";
		}else {
			$sql = "SELECT c.id_clanka AS id_clanka,
						   c.id_kategorije_clanka AS id_kategorije_clanka,
						   kc.naziv AS naziv_kategorije_clanka,
						   c.id_korisnika AS id_korisnika,
						   k.ime AS ime_korisnika,
						   k.prezime AS prezime_korisnika,
						   c.naslov AS naslov,
						   c.sadrzaj AS sadrzaj,
						   c.seo_naslov AS seo_naslov,
						   c.seo_opis AS seo_opis,
						   c.foto_url AS foto_url,
						   c.foto_alt_tag AS foto_alt_tag,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_vrijeme_izmjene, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_izmjene,
						   c.pozicija AS pozicija,
						   c.broj_pregleda AS broj_pregleda
					FROM clanak c INNER JOIN kategorija_clanka kc ON (c.id_kategorije_clanka = kc.id_kategorije_clanka)
								  INNER JOIN korisnik k ON (c.id_korisnika = k.id_korisnika)
					WHERE c.id_kategorije_clanka=1
					ORDER BY datum_vrijeme_objave DESC;";
		}
		
	}elseif ($orderBy == 2) {
		if ($searchData != ""){
			$sql = "SELECT c.id_clanka AS id_clanka,
						   c.id_kategorije_clanka AS id_kategorije_clanka,
						   kc.naziv AS naziv_kategorije_clanka,
						   c.id_korisnika AS id_korisnika,
						   k.ime AS ime_korisnika,
						   k.prezime AS prezime_korisnika,
						   c.naslov AS naslov,
						   c.sadrzaj AS sadrzaj,
						   c.seo_naslov AS seo_naslov,
						   c.seo_opis AS seo_opis,
						   c.foto_url AS foto_url,
						   c.foto_alt_tag AS foto_alt_tag,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_vrijeme_izmjene, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_izmjene,
						   c.pozicija AS pozicija,
						   c.broj_pregleda AS broj_pregleda
					FROM clanak c INNER JOIN kategorija_clanka kc ON (c.id_kategorije_clanka = kc.id_kategorije_clanka)
								  INNER JOIN korisnik k ON (c.id_korisnika = k.id_korisnika)
					WHERE LOWER(naslov) LIKE '%$searchData%'
					AND c.id_kategorije_clanka=2
					ORDER BY datum_vrijeme_objave DESC;";
		}else {
			$sql = "SELECT c.id_clanka AS id_clanka,
						   c.id_kategorije_clanka AS id_kategorije_clanka,
						   kc.naziv AS naziv_kategorije_clanka,
						   c.id_korisnika AS id_korisnika,
						   k.ime AS ime_korisnika,
						   k.prezime AS prezime_korisnika,
						   c.naslov AS naslov,
						   c.sadrzaj AS sadrzaj,
						   c.seo_naslov AS seo_naslov,
						   c.seo_opis AS seo_opis,
						   c.foto_url AS foto_url,
						   c.foto_alt_tag AS foto_alt_tag,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_vrijeme_izmjene, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_izmjene,
						   c.pozicija AS pozicija,
						   c.broj_pregleda AS broj_pregleda
					FROM clanak c INNER JOIN kategorija_clanka kc ON (c.id_kategorije_clanka = kc.id_kategorije_clanka)
								  INNER JOIN korisnik k ON (c.id_korisnika = k.id_korisnika)
					WHERE c.id_kategorije_clanka=2
					ORDER BY datum_vrijeme_objave DESC;";
		}
	}
	
	if($orderBy==0 || empty($orderBy)){
		if ($searchData != ""){
			$sql = "SELECT c.id_clanka AS id_clanka,
						   c.id_kategorije_clanka AS id_kategorije_clanka,
						   kc.naziv AS naziv_kategorije_clanka,
						   c.id_korisnika AS id_korisnika,
						   k.ime AS ime_korisnika,
						   k.prezime AS prezime_korisnika,
						   c.naslov AS naslov,
						   c.sadrzaj AS sadrzaj,
						   c.seo_naslov AS seo_naslov,
						   c.seo_opis AS seo_opis,
						   c.foto_url AS foto_url,
						   c.foto_alt_tag AS foto_alt_tag,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_vrijeme_izmjene, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_izmjene,
						   c.pozicija AS pozicija,
						   c.broj_pregleda AS broj_pregleda
					FROM clanak c INNER JOIN kategorija_clanka kc ON (c.id_kategorije_clanka = kc.id_kategorije_clanka)
								  INNER JOIN korisnik k ON (c.id_korisnika = k.id_korisnika)
					WHERE LOWER(naslov) LIKE '%$searchData%'
					ORDER BY datum_vrijeme_objave DESC;";
		}else {
			$sql = "SELECT c.id_clanka AS id_clanka,
						   c.id_kategorije_clanka AS id_kategorije_clanka,
						   kc.naziv AS naziv_kategorije_clanka,
						   c.id_korisnika AS id_korisnika,
						   k.ime AS ime_korisnika,
						   k.prezime AS prezime_korisnika,
						   c.naslov AS naslov,
						   c.sadrzaj AS sadrzaj,
						   c.seo_naslov AS seo_naslov,
						   c.seo_opis AS seo_opis,
						   c.foto_url AS foto_url,
						   c.foto_alt_tag AS foto_alt_tag,
						   DATE_FORMAT(datum_vrijeme_objave, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_objave,
						   DATE_FORMAT(datum_vrijeme_izmjene, '%d-%m-%Y %H:%i:%s') AS datum_vrijeme_izmjene,
						   c.pozicija AS pozicija,
						   c.broj_pregleda AS broj_pregleda
					FROM clanak c INNER JOIN kategorija_clanka kc ON (c.id_kategorije_clanka = kc.id_kategorije_clanka)
								  INNER JOIN korisnik k ON (c.id_korisnika = k.id_korisnika)
					ORDER BY datum_vrijeme_objave DESC;";
		}
	}

?>
<table>
	<tr>
		<th>Redni broj</th>
		<th>Naslov</th>
		<th>Datum i vrijeme</th>
		<th>Kategorija</th>
		<th></th>
		<th></th>
	</tr>
	<?php
	
	$stmt = $pdo -> prepare($sql);
	$stmt -> execute();		
	$result = $stmt -> fetchAll(PDO::FETCH_OBJ);
	$i = 1;
	foreach ($result as $res){
		$ime_prezime = $res -> ime_korisnika ." ". $res -> prezime_korisnika;
		echo '<tr>
				<td>'.$i++.'</td>
				<td>'.$res -> naslov.'</td>
				<td>'.$res -> datum_vrijeme_objave.'</td>
				<td>'.$res -> naziv_kategorije_clanka.'</td>'; ?>
				<td><i class="ion-edit" onclick="ActivateModal('modal-changeBlogPost', 'close-changeBlogPost', 'c',   '<?php echo $res -> id_clanka; ?>',
																											  '<?php echo $res -> id_kategorije_clanka; ?>',
																											  '<?php echo $ime_prezime; ?>',
																											  '<?php echo $res -> naslov; ?>',
																											  '<?php echo str_replace("\n","<br/>", $res -> sadrzaj); ?>',
																											  '<?php echo $res -> seo_naslov; ?>',
																											  '<?php echo $res -> seo_opis; ?>',
																											  '<?php echo $res -> foto_url; ?>',
																											  '<?php echo $res -> datum_vrijeme_objave; ?>',
																											  '<?php echo $res -> datum_vrijeme_izmjene; ?>',
																											  '<?php echo $res -> pozicija; ?>',
																											  '<?php echo $res -> foto_alt_tag; ?>',
																											  '<?php echo $res -> broj_pregleda; ?>');"></i></td>
				<td><i class="ion-trash-a" onclick="deleteFrom('clanak', 'id_clanka', '<?php echo $res -> id_clanka; ?>', 'includes/page_components/newsAdmin.php', 'main-page-content-admin', '1', '<?php echo $res -> foto_url; ?>');"></i></td>
 <?php echo '</tr>'; 
	}?>
</table>