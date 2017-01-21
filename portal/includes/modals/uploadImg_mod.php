<!--UPLOAD FOTOGRAFIJE PROIZVODA-->
<div id="modal-image" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class = "close" id="close-modal-image">x</span>
			<h2>Fotografija</h2>
		</div>
		<div class="modal-body">
			<form class="modal-form" action="process_upload.php" method="post" enctype="multipart/form-data" target="uploadframe" onsubmit="uploadimg(this); return false">
				<div class = "mf-row">
					<input type = "file" name="myfile" id="myfile">
				</div>
				<div class = "mf-row">
					<input type="submit" class="btn-modal btn-prenesi" value="Prenesi">
				</div>
				<div class = "mf-row">
					<iframe id="uploadframe" name="uploadframe" src="process_upload.php" class="noshow"></iframe>
				</div>
			</form>
		</div>
	</div>
</div>