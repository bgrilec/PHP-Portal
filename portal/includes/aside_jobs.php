<aside class="jobs">
	<a href=""><h2>Ponuda poslova</h2></a>
	<?php
						
		require_once "actions/dbConnection.php";
						
		$sql = "SELECT p.id_posla AS id_posla,
					   f.naziv AS naziv_firme,
					   f.logo_url AS logo_firme,
					   p.radno_mjesto AS radno_mjesto,
					   p.mjesto_rada AS mjesto_rada,
					   p.posao_url AS posao_url,
					   p.datum_vrijeme_objave AS datum_vrijeme_objave,
					   DATE_FORMAT(datum_do, '%d-%m-%Y') AS datum_do,
					   p.status AS status
				FROM posao p INNER JOIN firma f ON (p.id_firme = f.id_firme)
				WHERE status=1
				AND DATE(datum_vrijeme_objave) <= DATE(NOW())
				AND DATE(datum_do) >= DATE(CURDATE())
				ORDER BY rand()
				LIMIT 3;";
		$stmt = $pdo -> prepare($sql);
		$stmt -> execute();		
		$result = $stmt -> fetchAll(PDO::FETCH_OBJ);
		foreach ($result as $res){
			echo '<div class="job job-new">
					<a href="'.$res -> posao_url.'" target="_blank"><img src="'.$res -> logo_firme.'" class="job-logo" alt="'.$res -> naziv_firme.' logo"></a>
					<div class="job-content">
						<a href="'.$res -> posao_url.'" target="_blank"><h3>'.$res -> radno_mjesto.'</h3></a>
						<time datetime="'.$res -> datum_vrijeme_objave.'"><b>'.$res -> naziv_firme.'</b> - '.$res -> datum_do.' ('.$res -> mjesto_rada.')</time>
					</div>
				</div>';									
		}
	
	?>
	<a href="poslovi.php" class="offer-job-link">Ako nudite posao kliknite ovdje!</a>
</aside>