<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
	<?php foreach ($compania as $c) { ?>

	
	<form  action="<?php echo base_url('compania_controller/actualizar') ?>" method="POST" onsubmit="return validar2()">
	<center>
		<div>
			<input type="hidden" name="id"  value="<?= $c->id_compania ?>">
		<label>nombre_compania</label>
		<input type="text" name="nombre_compania" id="nombre_compania2" value="<?= $c->nombre_compania ?>">
		</div>
		<div>
			<label>direccion</label>
			<input type="text" name="direccion" value="<?= $c->direccion ?>">
		</div>
    <button type="submit" value="actualizar" class="btn btn-danger">Actualizar</button>
		</form>
<?php } ?>
</body>
</html>