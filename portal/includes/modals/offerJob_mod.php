<div id="modal-offerJob" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close" id="close-offerJob">&times;</span>
			<h2>Ponuda posla</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" onsubmit = "return false">
				<div class = "mf-row">
					<div id = "offerJob-notice"></div>
				</div>
				<div class="mf-row">
					<label for="job_naziv">Naziv radnog mjesta</label>
					<input type="text" id="job_naziv">
				</div>
				<div class="mf-row">
					<label for="job_mjesto">Mjesto rada</label>
					<input type="text" id="job_mjesto">
				</div>
				<div class="mf-row">
					<label for="job_url">Posao URL</label>
					<input type="url" id="job_url">
				</div>
				<div class="mf-row">
					<label for="job_start_date">Datum objave posla</label>
					<input type="date" id="job_start_date" placeholder="dd-mm-yyyy" pattern="\d{1,2}-\d{1,2}-\d{4}">
				</div>
				<div class="mf-row">
					<label for="job_stop_date">Datum isteka</label>
					<input type="date" id="job_stop_date" placeholder="dd-mm-yyyy" pattern="\d{1,2}-\d{1,2}-\d{4}">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-offerJob">Ponudi posao</a>
		</div>
	</div>
</div>