<div id="modal-addUser" class="modal big-modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-addUser">&times;</span>
			<h2><span id="addUserTitle">Novi korisnik</span></h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" name="modal_addUser" onsubmit = "return false">
				<div class = "mf-row">
					<div id = "addUser-notice"></div>
				</div>
				<div class="mf-row">
					<label for="au_uloga">Uloga</label>
					<select id="au_uloga" name="au_uloga">
					<?php
						$sql = "SELECT id_uloge,
									   naziv 
								FROM uloga;";	
						$stmt = $pdo -> prepare($sql);
						$stmt -> execute();
						$result = $stmt -> fetchAll(PDO::FETCH_OBJ);
						foreach ($result as $res){
							echo '<option value="'.$res -> id_uloge.'">'.$res -> naziv.'</option>';
						} 					
					?>
					</select>
				</div>
				<div class="mf-row">
					<label for="au_ime">Ime</label>
					<input type="text" id="au_ime">
				</div>
				<div class="mf-row">
					<label for="au_prezime">Prezime</label>
					<input type="text" id="au_prezime">
				</div>
				<div class="mf-row">
					<label for="au_adresa">Adresa</label>
					<input type="text" id="au_adresa">
				</div>
				<div class="mf-row">
					<label for="au_mjesto">Mjesto</label>
					<input type="text" id="au_mjesto">
				</div>
				<div class="mf-row">
					<label for="au_drzava">Država</label>
					<input type="text" id="au_drzava">
				</div>
				<div class="mf-row">
					<label for="au_email">Email</label>
					<input type="text" id="au_email">
				</div>
				<div class="mf-row">
					<label for="au_pwd">Lozinka</label>
					<input type="password" id="au_pwd">
				</div>
				<div class="mf-row">
					<label for="au_pwd_repeat">Ponovljena lozinka</label>
					<input type="password" id="au_pwd_repeat">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-register"><span id="addUserBtn">Dodaj korisnika</span></a>
		</div>
	</div>
</div>