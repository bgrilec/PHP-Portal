<h2>Nova vijest</h2>
<form class="modal-form admin-form">
	<div class="mf-row">
		<label for="blog_category">Kategorija:</label>
		<select name="blog_category" id="blog_category">
			<option value="1">Informacijske tehnologije</option>
			<option value="2">Digitalni marketing</option>
		</select>
	</div>
	<div class="mf-row">
		<label for="blog_category">Pozicija na stranici:</label>
		<select name="blog_position" id="blog_position">
			<option value="1">Zadano</option>
			<option value="2">Istaknuto</option>
			<option value="3">Slider mali</option>
			<option value="4">Slider veliki</option>
		</select>
	</div>
	<div class="mf-row">
		<label for="blog-naslov">Naslov:</label>
		<input type="text" name="blog-naslov" id="blog-naslov">
	</div>
	<div class="mf-row">
		<label for="blog-sadrzaj">Sadržaj:</label>
		<textarea name="blog_sadrzaj" id="blog-sadrzaj" rows="10"></textarea>
	</div>
	<div class="mf-row">
		<label for="blog-naslov-seo">SEO naslov:</label>
		<input type="text" name="blog-naslov-seo" id="blog-naslov-seo">
	</div>
	<div class="mf-row">
		<label for="blog-description-seo">SEO opis:</label>
		<textarea name="blog-description-seo" id="blog-description-seo" rows="4"></textarea>
	</div>
	<div class = "mf-row">
		<a class="btn-modal btn-upload-img" onclick="ActivateModal('modal-image', 'close-modal-image')">Slika članka</a>
	</div>
	<div class = "mf-row">
		Slika URL: <span id="showimg"></span>
	</div>
	<div class="mf-row">
		<label for="blog-img-alt">Slika ALT tag:</label>
		<input type="text" id="blog-img-alt">
	</div>
	<div class="mf-row">
		<a class="btn-reg-log btn-admin-form" onclick="addPostAdmin();">Objavi</a>
	</div>
</form>