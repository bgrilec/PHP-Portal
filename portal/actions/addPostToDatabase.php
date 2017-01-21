<?php

session_start();

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
$id_korisnika = $_SESSION['user']['id_korisnika'];
$datum_vrijeme = date("Y-m-d H:i:s");


$sql = "INSERT INTO clanak 
		(id_kategorije_clanka, id_korisnika, naslov, sadrzaj, seo_naslov, seo_opis, foto_url, foto_alt_tag, datum_vrijeme_objave, pozicija) 
		VALUES 
		(:id_kategorije_clanka, :id_korisnika, :naslov, :sadrzaj, :seo_naslov, :seo_opis, :foto_url, :foto_alt_tag, :datum_vrijeme_objave, :pozicija);";
		
$stmt = $pdo -> prepare($sql);
$status = $stmt -> execute(array(':id_kategorije_clanka'=>$kategorija, 
								   ':id_korisnika'=>$id_korisnika, 
								   ':naslov'=>$naslov, 
								   ':sadrzaj'=>$sadrzaj, 
								   ':seo_naslov'=>$seo_naslov,
								   ':seo_opis'=>$seo_sadrzaj,
								   ':foto_url'=>$img_url, 
								   ':foto_alt_tag'=>$img_alt_tag,
								   ':datum_vrijeme_objave'=>$datum_vrijeme,
								   ':pozicija'=>$pozicija));

if ($status){
	echo 1;
}else {
	echo 0;
}


?>