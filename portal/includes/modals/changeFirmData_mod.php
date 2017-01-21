<div id="modal-changeFirmData" class="modal big-modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-changeFirmData">&times;</span>
			<h2><span id="changeFirmDataTitle">Podaci firme</span></h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" name="modal_changeFirmData" onsubmit = "return false">
				<div class = "mf-row">
					<div id = "changeFirmData-notice"></div>
				</div>
				<div class="mf-row">
					<label for="cd_naziv">Naziv firme:</label>
					<input type="text" id="cd_naziv">
				</div>
				<div class="mf-row">
					<label for="cd_adresa">Adresa</label>
					<input type="text" id="cd_adresa">
				</div>
				<div class="mf-row">
					<label for="cd_mjesto">Mjesto</label>
					<input type="text" id="cd_mjesto">
				</div>
				<div class="mf-row">
					<label for="cd_drzava">Država</label>
					<input type="text" id="cd_drzava">
				</div>
				<div class = "mf-row">
					<a class="btn-modal btn-upload-img" onclick="ActivateModal('modal-image', 'close-modal-image')">Logo slika</a>
				</div>
				<div class = "mf-row">
					Logo URL: <span id="showimg"></span>
				</div>
				<div class="mf-row">
					<label for="cd_web">Web URL</label>
					<input type="text" id="cd_web">
				</div>
				<div class="mf-row">
					<label for="cd_email">Email</label>
					<input type="text" id="cd_email">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-changeFirmData">Izmjeni podatke</a>
		</div>
	</div>
</div>