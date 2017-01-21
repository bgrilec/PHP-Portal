<div id="modal-changeCommentAdmin" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-changeCommentAdmin">&times;</span>
			<h2>Odobravanje</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" onsubmit = "return false" id="modalFormChangeCommentAdmin">
				<div class = "mf-row">
					<div id = "changeCommentAdmin-notice"></div>
				</div>
				<div class = "mf-row">
					<p><b>Naslov članka:</b> <span id="c_clanak_title"></span></p>
				</div>
				<div class = "mf-row">
					<p><b>Komentar:</b> <span id="c_clanak_komentar"></span></p>
				</div>
				<div class = "mf-row">
					<p><b>Korisnik:</b> <span id="c_clanak_korisnik"></span></p>
				</div>
				<div class = "mf-row">
					<p><b>Email korisnika:</b> <span id="c_clanak_korisnik_email"></span></p>
				</div>
				<div class = "mf-row">
					<p><b>Datum i vrijeme objave:</b> <span id="c_clanak_datum_vrijeme"></span></p>
				</div>
				<div class="mf-row">
					<label><b>Status:</b></label>
					<div class="mf-row-block">
						<div class="mf-rb">
							<input type="radio" name="c_comment_status" value="0">
							<span class="radio-label">Nije odobreno</span>
						</div>
						<div class="mf-rb">
							<input type="radio" name="c_comment_status" value="1">
							<span class="radio-label">Odobreno</span>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-changeCommentAdmin">Ažuriraj</a>
		</div>
	</div>
</div>