<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
	<center>
	<?php foreach ($empleado_equipo as $ee) { ?>
	<form action="<?php echo base_url().'empleado_equipo_controller/actualizar' ?>" method="POST" onsubmit="return validar()">
		<div>
			<input type="hidden" name="id" value="<?= $ee->id_empleado_equipo ?>">
		</div>
		<div>
				<label>Nombre del empleado</label>
				<select name="empleado" id="empleado">
					<option value="">--Seleccione una opcion</option>
					<?php foreach ($empleado as $e) { ?>
						<option value="<?= $e->id_empleado ?>"<?php if ($e->id_empleado == $ee->id_empleado) {echo "selected"; } ?>><?= $e->nombre_empleado." ".$e->apellido ?></option>
					<?php } ?>
				</select>
			</div>
		<div>
			<label>Codigo equipo</label>
			<select name="cod_equipo"  id="cod_equipo">
				<option value="">--Seleccione una opcion--</option>
				<?php foreach ($equipo as $c) { ?>
					<option value="<?= $c->cod_equipo ?>" <?php if ($c->cod_equipo == $ee->cod_equipo) {echo "selected"; } ?>><?= $c->cod_equipo ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>horario</label>
			<select name="horario" id="horario" >
				<option value="">--Seleccione una opcion--</option>
				<?php foreach ($horario as $h) { ?>
					<option value="<?= $h->id_horario ?>" <?php if($h->id_horario == $ee->id_horario){echo "selected"; } ?> ><?= $h->hora_inicial." ".$h->hora_final." ".$h->dias ?></option>
				<?php } ?>
			</select>
		</div>
		
		<div>
			<label>Ruta</label>
			<select name="ruta"  id="ruta">
				<option value="">--Seleccione una opcion--</option>
				<?php foreach ($ruta as $r) { ?>
					<option value="<?= $r->id_ruta ?>" <?php if($r->id_ruta == $ee->id_ruta){echo "selected"; } ?>><?= $r->nombre_ruta ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<input type="submit" name="ingresar" onclick="alerta_actualizar(<?= $ee->id_empleado_equipo ?>)">
		</div>
	</form>
<?php } ?>
</center>
</body>