<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div class="Formulario">
		<form method="POST" action="">
			<input type="text" name="nombre" placeholder="Nombre" value="<?php echo set_value('nombre'); ?>">
			<input type="text" name="departamento" placeholder="Departamento" value="<?php echo set_value('departamento'); ?>">
			<input type="text" name="categoria" placeholder="Categoria" value="<?php echo set_value('categoria'); ?>">
			<input type="text" name="cuil" placeholder="CUIL/CUIT" value="<?php echo set_value('cuil'); ?>">
			<input type="submit" name="submit" value="Dar Alta">
		</form>
		<div style="margin-left: 80%;font-size: 20px">
			<a href="<?php echo base_url();?>" id="link">Volver</a>
		</div>
	</div>
</body>
</html>