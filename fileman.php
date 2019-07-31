<script src="https://cdn.ckeditor.com/4.12.1/full-all/ckeditor.js"></script>
<textarea name="editor1"></textarea>
<script>
	CKEDITOR.replace( 'editor1', {
		filebrowserBrowseUrl: 'fileman/index.html',
		filebrowserImageBrowseUrl: 'fileman/index.html',
		extraPlugins: 'codesnippet'
	});
</script>
<!-- 
Yüklenecek dosyaların dizinini değiştirmek için;
fileman/conf.json içerisinden FILES_ROOT(satır 2) kısmını dğiştirin.
-->