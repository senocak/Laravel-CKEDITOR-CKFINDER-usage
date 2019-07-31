# Laravel CKEDITOR & CKFINDER & FILEMAN usage

## Installation

- Select and download the **fileman** or **ckfinder** files into your file system.
- Move the selected directory to the **public** folder in your **Laravel** project
- Create a new directory named **upload** to save the all images from your **ckfinder** or **fileman** editor.
- Sample example shows the usage with the CDNs

## Usage in your blade template
- Include the ckeditor CDN
	- {!!  Html::script('https://cdn.ckeditor.com/4.12.1/full-all/ckeditor.js') !!}
- Converting the **textarea** field with **CKeditor** without file browser
	```
	<script>
		CKEDITOR.replace( 'editor');
	</script>
	```
- Converting the **textarea** field with **CKeditor** with selected file browser
	- For CKFINDER;
		```
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
		```
	- For FileMan;
		```
			<script>
				CKEDITOR.replace( 'editor1', {
					filebrowserBrowseUrl: 'fileman/index.html',
					filebrowserImageBrowseUrl: 'fileman/index.html',
					extraPlugins: 'codesnippet'
				});
			</script>
		```