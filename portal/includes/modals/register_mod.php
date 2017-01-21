<div id="modal-register" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-register">&times;</span>
			<h2>Registracija</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" onsubmit = "return false">
				<div class = "mf-row">
					<div id = "register-notice"></div>
				</div>
				<div class="mf-row">
					<label for="naziv">Naziv poduzeća</label>
					<input type="text" id="r_naziv">
				</div>
				<div class="mf-row">
					<label for="email">Email</label>
					<input type="text" id="r_email">
				</div>
				<div class="mf-row">
					<label for="mf_pwd">Lozinka</label>
					<input type="password" id="r_pwd">
				</div>
				<div class="mf-row">
					<label for="mf_pwd_repeat">Ponovljena lozinka</label>
					<input type="password" id="r_pwd_repeat">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-register">Registriraj se</a>
		</div>
	</div>
</div>