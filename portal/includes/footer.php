<div class="footer-inner">
	<nav>
		<ul>
			<li><a href="clanci.php?cat=informacijske_tehnologije">Informacijske tehnologije</a></li>
			<li><a href="clanci.php?cat=digitalni_marketing">Digitalni markteting</a></li>
			<li><a href="poslovi.php">Poslovi</a></li>
			<?php
				if (isset($_SESSION['firm'])){
					echo '<li><a href="profil_firma.php">Profil</a></li>
						  <li><a href="actions/logout.php">Odjava</a></li>';
				}elseif (isset($_SESSION['user'])){
					echo '<li><a href="profil_admin.php">Profil</a></li>
						  <li><a href="actions/logout.php">Odjava</a></li>';
				}else {
			?>
			<li><a onclick="ActivateModal('modal-login', 'close-login');">Prijava</a></li>
			<li><a onclick="ActivateModal('modal-register', 'close-register');">Registracija</a></li>
			<?php }?>
		</ul>
	</nav>
	<div id="footer-social">
		<ul>
			<li><a href="https://hr.linkedin.com/in/bornagrilec" target="_blank"><i class="ion-social-linkedin"></i></a></li>
			<li><a href="https://twitter.com/bornagrilec" target="_blank"><i class="ion-social-twitter"></i></a></li>
			<li><a href="https://plus.google.com/+BornaGrilec" target="_blank"><i class="ion-social-googleplus"></i></a></li>
			<li><a href="https://www.facebook.com/borna.grilec" target="_blank"><i class="ion-social-facebook"></i></a></li>
		</ul>                  
	</div>
	<p class="footer-info">Copyright&copy; by <i>Borna Grilec</i> - 2016</p>
</div>