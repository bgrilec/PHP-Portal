<div id="modal-login" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-login">&times;</span>
			<h2>Prijava</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" onsubmit = "return false">
				<div class = "mf-row">
					<div id = "login-notice"></div>
				</div>
				<div class="mf-row">
					<label for="l_email">Email</label>
					<input type="text" id="l_email">
				</div>
				<div class="mf-row">
					<label for="mf_pwd">Lozinka</label>
					<input type="password" id="l_pwd">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-login">Prijavi se</a>
		</div>
	</div>
</div>