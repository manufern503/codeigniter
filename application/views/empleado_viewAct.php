<br>
<br>
<br>
<br>
<body>
	<?php foreach ($empleado as $e) { ?>
		<form  action="<?php echo base_url('empleado_controller/actualizar')  ?>" method="POST"  onsubmit="return validarFormulario()">
			<center>
				<div class="animated zoomInDown	" class="col-md-12">
					<h1 class="bg-dark text-white text-center">ACTUALIZAR DATOS</h1>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3"><label>Nombre </label> </div>
					<input type="hidden" name="id" value="<?= $e->id_empleado ?>">
					<input type="text" name="nombre_empleado" id="nombre_empleado" value="<?= $e->nombre_empleado ?>">
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3"><label>apellido</label></div>
					<input type="text" name="apellido"  value="<?= $e->apellido ?>">
				</div>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3">	<label>edad</label></div>
					<input type="number" name="edad" value="<?= $e->edad ?>">
				</div>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3"><label>Sexo</label></div>
					<select name="nombre_sexo" required="">
						<option value="">--procedencia---</option>
						<?php foreach($nombre_sexo as $s) {?>
							<option value="<?= $s->id_sexo ?>"<?php if($s->id_sexo==$s->id_sexo){echo "selected";} ?>><?= $s->nombre_sexo ?></option>
						<?php  } ?>
					</select>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3"><label>F_nacimiento</label></div>
					<input type="date" name="f_nacimiento" value="<?= $e->f_nacimiento ?>">
				</div>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3"><label>Dui</label></div>
					<input type="number" name="dui" readonly value="<?= $e->dui ?>">
				</div>
				<br>
				<div>
					<div class="row">

						<div class="col-md-3"></div>
						<div class="col-md-3"><label>Dit</label></div>
						<input type="number" name="nit" readonly value="<?= $e->nit ?>">
					</div>
					<br>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3"><label>Licencia</label></div>

						<input type="number" name="licencia" readonly value="<?= $e->licencia ?>">
					</div>
					<br>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3"><label>Nombre_cargo</label></div>

						<select name="nombre_cargo">
							<option value="">seleccione su cargo</option>
							<?php foreach ($nombre_cargo as $s) { ?>
								<option value="<?= $s->id_cargo ?>"<?php if($s->id_cargo==$e->id_cargo){echo "selected";} ?>><?= $s->nombre_cargo ?></option>
							<?php  } ?>
						</select>
					</div>
					<br>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3">	<label>nombre_estadoe</label></div>
						<select name="nombre_estadoe">
							<option value="">seleccione su cargo</option>
							<?php foreach ($nombre_estadoe as $s) { ?>
								<option value="<?= $s->id_estado_empleado ?>"<?php if($s->id_estado_empleado==$e->id_estado_empleado){echo "selected";} ?>><?= $s->nombre_estadoe ?></option>
							<?php  } ?>
						</select>
					</div>
					<br>
					<div class="animated heartBeat">
						<button type="submit" value="actualizar" class="btn btn-danger">ACTUALIZAR</button>
					</div>
				</form>
			<?php } ?>

			<script src="<?php echo base_url('validacion.js')?>"></script>
		</body>
		</html>