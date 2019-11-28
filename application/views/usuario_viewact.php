
<body>
	<center>
	<?php foreach($nombre as $n ){ ?>
<form method="POST" action="<?php echo base_url('usuario_controller/actualizar')?>" onsubmit="return validarFormularios()">
			<div>
				<label>nombre</label>
				<input type="hidden" name="id" value="<?= $n->id_usuario  ?>">
				<input type="text" name="nombre" id="nombre" value="<?= $n->nombre ?>">
			</div>
			<div>
				<label>usuario</label>
				<input type="text" name="usuario" id="usuario" value="<?= $n->usuario?>">
			</div>
			<div>
				<label>correo</label>
				<input type="text" name="correo" id="correo" value="<?= $n->correo?>">
			</div>
			<div>
				<label>rol</label>
				<select name="nombre_rol" id="nombre_rol">
					<option>--seleccione un rol</option>
					<?php foreach($nombre_rol as $nr){ ?>
						<option value="<?= $nr->id_rol ?>"<?php if($nr->nombre_rol == $n->nombre_rol){ echo "selected"; } ?>><?= $nr->nombre_rol ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<input type="submit" name="actualizar" value="actualizar">
			</div>
		</form>
	<?php } ?>
	</center>
</body>
<script src="<?php echo base_url('props/bootstrap/js/usuario.js');?>"></script>