<script src="https://cdn.ckeditor.com/4.12.1/full-all/ckeditor.js"></script>
<textarea name="editor1"></textarea>
<script language="javascript" type="text/javascript">
	CKEDITOR.replace('editor1',{
		filebrowserBrowseUrl: '/ckfinder/browser/browse.php',
		filebrowserImageBrowseUrl: 'ckfinder/browser/browse.php?type=Images',
		filebrowserUploadUrl: 'ckfinder/uploader/upload.php',
		filebrowserImageUploadUrl: 'ckfinder/uploader/upload.php?type=Images',
		filebrowserWindowWidth: '900',
		filebrowserWindowHeight: '400',
		filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
<!-- 
Yüklenecek dosyaların dizinini değiştirmek için;
ckfinder/config.php içerisinden baseUrl(satır 69) kısmını ve alt dizin olarak directory(satır 83) kısmını dğiştirin.
-->