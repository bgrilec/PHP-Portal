<h2>Komentari</h2>
<form class="modal-form admin-form admin-filter">
	<div class="mf-row">
		<select name="status_type" id="blog-category" onchange="orderBy(this.value, search_comm.value, 'includes/page_components/refreshCommentsAdmin.php', 'refresh-comments-admin');">
			<option value="0">Status: </option>
			<option value="1">Odobreno</option>
			<option value="2">Nije odobreno</option>
		</select>
	</div>
	<div class="mf-row">
		<input type="search" name="search_comm" placeholder=" Pretraži..." 
		onkeyup="searchItem(this.value, status_type.value, 'includes/page_components/refreshCommentsAdmin.php', 'refresh-comments-admin');">
	</div>
</form>
<div id="refresh-comments-admin">
	<?php require_once "refreshCommentsAdmin.php"; ?>
</div>
