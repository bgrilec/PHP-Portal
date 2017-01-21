<h2>Poslovi</h2>
<form class="modal-form admin-form admin-filter">
	<div class="mf-row">
		<select name="status_type" id="blog-category" onchange="orderBy(this.value, search_job.value, 'includes/page_components/refreshFirmJobs.php', 'refresh-jobs-at-admin');">
			<option value="0">Status: </option>
			<option value="1">Odobreno</option>
			<option value="2">Nije odobreno</option>
		</select>
	</div>
	<div class="mf-row">
		<input type="search" name="search_job" id="blog-naslov" placeholder=" Pretraži..." 
		onkeyup="searchItem(this.value, status_type.value, 'includes/page_components/refreshFirmJobs.php', 'refresh-jobs-at-admin');">
	</div>
</form>
<div id="refresh-jobs-at-admin">
	<?php require_once "refreshFirmJobs.php"; ?>
</div>