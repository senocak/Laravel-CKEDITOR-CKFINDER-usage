# Laravel CKEDITOR & CKFINDER usage

## Installation

- Download the **ckeditor** and **ckfinder** files into your file system. 
- Make a new directory named **editor**
- Move the **ckeditor** and **ckfinder** files into **editor** directory
- Move the **editor** directory to the **public** folder in your **Laravel** project
- Create a new directory named **upload** to save the all images from your **ckfinder** editor.
- Sample example shows the usage with the CDNs

## Usage in your blade template
- Include the **ckeditor.css** and **ckeditor.js** files
	- {!!  Html::style('editor/ckeditor/ckeditor.css') !!}
	- {!!  Html::script('editor/ckeditor/ckeditor.js') !!}
- Converting the **textarea** field with **CKeditor**
	```
	<script>
	CKEDITOR.replace( 'editor', {
		extraPlugins:  'image2,imageuploader,codesnippet',
		language:  'tr'
	});
	</script>
	```

## Adding the Ckfinder to Ckeditor
```
<script  language="javascript"  type="text/javascript">
	CKEDITOR.replace('editor1',{
		filebrowserWindowWidth:  '900',
		filebrowserWindowHeight:  '400',
		filebrowserBrowseUrl:  '/editor/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl:  '/editor/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl:  '/editor/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl:  '/editor/ckfinder/core/connector/php/connector.php?		command=QuickUpload&type=Files',
		filebrowserImageUploadUrl:  '/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl:  '/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
```  