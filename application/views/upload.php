<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo base_url(); ?>"/>
	<title>Document</title>
</head>
<body>
	<?php echo form_open_multipart('galerias/upload');?>
		<input type="text" id="desc" name="desc" value="" />
		<input type="file" id="userfile" name="userfile" />
		<input type="checkbox" name="capa" value="capa">
		<button  type="submit"  value="upload">Enviar</button>
	<?=form_close()?>
</body>
</html>
