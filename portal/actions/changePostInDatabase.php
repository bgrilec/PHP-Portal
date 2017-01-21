<?php

require_once "functions.php";
require_once "dbConnection.php";

$kategorija = dataFilter('kategorija', 'i');
$pozicija = dataFilter('pozicija', 'i');
$naslov = dataFilter('naslov', 's');
$sadrzaj = nl2br(dataFilter('sadrzaj', 's'));
$seo_naslov = dataFilter('seo_naslov', 's');
$seo_sadrzaj = dataFilter('seo_sadrzaj', 's');
$img_url = dataFilter('img_url', 's');
$img_alt_tag = dataFilter('img_alt_tag', 's');
$id_clanka = dataFilter('id_clanka', 'i');


$sql = "UPDATE clanak
		SET id_kategorije_clanka=:id_kategorije_clanka, 
			naslov=:naslov, 
			sadrzaj=:sadrzaj, 
			seo_naslov=:seo_naslov,
			seo_opis=:seo_opis, 
			foto_url=:foto_url,
			foto_alt_tag=:foto_alt_tag,
			pozicija=:pozicija
		WHERE id_clanka=:id_clanka;";
		
$stmt = $pdo -> prepare($sql);
$status = $stmt -> execute(array(':id_kategorije_clanka'=>$kategorija,
								   ':naslov'=>$naslov, 
								   ':sadrzaj'=>$sadrzaj, 
								   ':seo_naslov'=>$seo_naslov,
								   ':seo_opis'=>$seo_sadrzaj,
								   ':foto_url'=>$img_url,
								   ':foto_alt_tag'=>$img_alt_tag,
								   ':pozicija'=>$pozicija,
								   ':id_clanka'=>$id_clanka));

if ($status){
	echo 1;
}else {
	echo 0;
}


?>