<div id="modal-changeJobAdmin" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-changeJobAdmin">&times;</span>
			<h2>Odobravanje</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" onsubmit = "return false" id="modalFormChangeJobAdmin">
				<div class = "mf-row">
					<div id = "changeJobAdmin-notice"></div>
				</div>
				<div class = "mf-row">
					<p>Naziv firme: <span id="c_job_firma"></span></p>
				</div>
				<div class="mf-row">
					<label for="c_job_naziv">Naziv radnog mjesta</label>
					<input type="text" id="c_job_naziv">
				</div>
				<div class="mf-row">
					<label for="c_job_mjesto">Mjesto rada</label>
					<input type="text" id="c_job_mjesto">
				</div>
				<div class="mf-row">
					<label for="c_job_url">Posao URL</label>
					<input type="url" id="c_job_url">
				</div>
				<div class="mf-row">
					<label for="c_job_start_date">Datum objave posla</label>
					<input type="date" id="c_job_start_date" placeholder="dd-mm-yyyy" pattern="\d{1,2}-\d{1,2}-\d{4}">
				</div>
				<div class="mf-row">
					<label for="c_job_stop_date">Datum isteka</label>
					<input type="date" id="c_job_stop_date" placeholder="dd-mm-yyyy" pattern="\d{1,2}-\d{1,2}-\d{4}">
				</div>
				<div class="mf-row">
					<label>Status:</label>
					<div class="mf-row-block">
						<div class="mf-rb">
							<input type="radio" name="c_job_status" value="0">
							<span class="radio-label">Nije odobreno</span>
						</div>
						<div class="mf-rb">
							<input type="radio" name="c_job_status" value="1">
							<span class="radio-label">Odobreno</span>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-changeJobAdmin">Ažuriraj</a>
		</div>
	</div>
</div>