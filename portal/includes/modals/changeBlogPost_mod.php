<div id="modal-changeBlogPost" class="modal big-modal">
	<div class="modal-content modal-content-clanak">
		<div class="modal-header">
			<span class="close" id="close-changeBlogPost">&times;</span>
			<h2>Ažuriranje članka</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" onsubmit = "return false" id="modalChangeBlogPost">
				<div class = "mf-row">
					<div id = "changeBlogPost-notice"></div>
				</div>
				<div class="mf-row">
					<label for="c_blog_category">Kategorija:</label>
					<select name="c_blog_category" id="c_blog_category">
						<option value="1">Informacijske tehnologije</option>
						<option value="2">Digitalni marketing</option>
					</select>
				</div>
				<div class="mf-row">
					<label for="c_blog_position">Pozicija na stranici:</label>
					<select name="c_blog_position" id="c_blog_position">
						<option value="1">Zadano</option>
						<option value="2">Istaknuto</option>
						<option value="3">Slider mali</option>
						<option value="4">Slider veliki</option>
					</select>
				</div>
				<div class="mf-row">
					<label for="c-blog-naslov">Naslov:</label>
					<input type="text" name="blog-naslov" id="c-blog-naslov">
				</div>
				<div class="mf-row">
					<label for="blog-sadrzaj">Sadržaj:</label>
					<textarea name="c_blog_sadrzaj" id="c-blog-sadrzaj" rows="10"></textarea>
				</div>
				<div class="mf-row">
					<label for="blog-naslov-seo">SEO naslov:</label>
					<input type="text" name="blog-naslov-seo" id="c-blog-naslov-seo">
				</div>
				<div class="mf-row">
					<label for="blog-description-seo">SEO opis:</label>
					<textarea name="blog-description-seo" id="c-blog-description-seo" rows="4"></textarea>
				</div>
				<div class = "mf-row">
					<a class="btn-modal btn-upload-img" onclick="ActivateModal('modal-image', 'close-modal-image')">Slika članka</a>
				</div>
				<div class = "mf-row">
					Slika URL: <span id="showimg"></span>
				</div>
				<div class="mf-row">
					<label for="blog-img-alt">Slika ALT tag:</label>
					<input type="text" id="c-blog-img-alt">
				</div>
				<div class = "mf-row">
					<p>Datum i vrijeme objave: <span id="c-datum-vrijeme-objave"></span></p>
				</div>
				<div class = "mf-row">
					<p>Datum i vrijeme zadnje izmjene: <span id="c-datum-vrijeme-izmjene"></span></p>
				</div>
				<div class = "mf-row">
					<p>Ukupan broj pregleda: <span id="c-blog-broj-pregleda"></span></p>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a class="btn-modal" id="btn-changeBlogPost">Ažuriraj</a>
		</div>
	</div>
</div>