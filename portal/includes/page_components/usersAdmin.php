<h2>Korisnici</h2>
<a class="btn-reg-log btn-admin-form" id="add-user" onclick="ActivateModal('modal-addUser', 'close-addUser', 'n');">Dodaj korisnika</a>
<form class="modal-form admin-form admin-filter">
	<div class="mf-row">
		<select name="user_type" id="blog-category" onchange="orderBy(this.value, search_user.value, 'includes/page_components/refreshUsers.php', 'refresh-users');">
			<option value="1">Zaposlenik</option>
			<option value="2">Firma</option>
		</select>
	</div>
	<div class="mf-row">
		<input type="search" name="search_user" id="blog-naslov" placeholder=" Pretraži..." onkeyup="searchItem(this.value, user_type.value, 'includes/page_components/refreshUsers.php', 'refresh-users');">
	</div>
</form>
<div id="refresh-users">
	<?php require_once "refreshUsers.php"; ?>
</div>
