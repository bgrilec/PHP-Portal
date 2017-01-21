
<nav>
	<a href="index.php"><h1 class="logo">Portal</h1></a>
	<ul>
		<li><a href="clanci.php?cat=informacijske-tehnologije">Informacijske tehnologije</a></li>
		<li><a href="clanci.php?cat=digitalni-marketing">Digitalni markteting</a></li>
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
		<li>
			<a class="no-href" id="korisnici-link" onclick="ActivateDropdown();">Korisnici</a>
			<ul class="dropdown" id="dropdown">
				<li><a onclick="ActivateModal('modal-login', 'close-login');">Prijava</a></li>
				<li><a onclick="ActivateModal('modal-register', 'close-register');">Registracija</a></li>
			</ul>
		</li>
		<?php }?>
	</ul>
</nav>
