<div id="modal-changePass" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-changePass">&times;</span>
			<h2>Promjena lozinke</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" onsubmit = "return false">
				<div class = "mf-row">
					<div id = "changePass-notice"></div>
				</div>
				<div class="mf-row">
					<label for="change_pass">Nova lozinka</label>
					<input type="password" id="change_pass">
				</div>
				<div class="mf-row">
					<label for="change_pass_repeat">Ponovljena lozinka</label>
					<input type="password" id="change_pass_repeat">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-changePass">Promjeni lozinku</a>
		</div>
	</div>
</div>