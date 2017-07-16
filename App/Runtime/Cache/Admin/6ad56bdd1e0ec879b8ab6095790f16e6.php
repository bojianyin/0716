<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="<?php echo U(GROUP_NAME.'/Blog/uploadHandler');?>" enctype="multipart/form-data" method="post">
			<input type="file" name="files[]" multiple="multiple" />
			<input type="submit" value="上传" />
		</form>
	</body>
</html>