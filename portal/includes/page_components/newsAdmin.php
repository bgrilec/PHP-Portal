<h2>Vijesti</h2>
<form class="modal-form admin-form admin-filter">
	<div class="mf-row">
		<select name="status_type" id="blog-category" onchange="orderBy(this.value, search_job.value, 'includes/page_components/refreshBlogPosts.php', 'refresh-blog-posts');">
			<option value="0">Kategorija:</option>
			<option value="1">Informacijske tehnologije</option>
			<option value="2">Digitalni marketing</option>
		</select>
	</div>
	<div class="mf-row">
		<input type="search" name="search_job" id="blog-naslov" placeholder=" Pretraži..." 
		onkeyup="searchItem(this.value, status_type.value, 'includes/page_components/refreshBlogPosts.php', 'refresh-blog-posts');">
	</div>
</form>
<div id="refresh-blog-posts">
	<?php require_once "refreshBlogPosts.php"; ?>
</div>
