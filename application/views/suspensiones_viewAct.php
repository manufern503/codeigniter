<script src="<?php echo base_url('props/bootstrap/js/validacion_suspensiones.js');?>"></script>
<body>
	<?php foreach ($suspensiones as $su) { ?>
		
		
		<form action="<?php echo base_url().'suspensiones_controller/actualizar' ?>" method="POST" onsubmit="return validar()">
			<div>
				<input type="hidden" name="id" value="<?= $su->id_suspensiones ?>">
			</div>
			<div>
				<label>Fecha</label>
				<input type="date" name="fecha" value="<?= $su->fecha ?>" id="fecha">
			</div>
			<div>
				<label>Codigo del equipo</label>
				<select name="cod_equipo" id="cod_equipo">
					<option value="">--Seleccione una opcion</option>
					<?php foreach ($cod_equipo as $c) { ?>
						<option value="<?= $c->cod_equipo ?>" <?php if ($c->cod_equipo == $su->cod_equipo) {echo "selected"; } ?>><?= $c->cod_equipo ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label>Nombre del empleado</label>
				<select name="empleado" id="empleado">
					<option value="">--Seleccione una opcion</option>
					<?php foreach ($empleado as $e) { ?>
						<option value="<?= $e->id_empleado ?>"<?php if ($e->id_empleado == $su->id_empleado) {echo "selected"; } ?>><?= $e->nombre_empleado." ".$e->apellido ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label>Numero de dias de suspension</label>
				<input type="number" name="n_dias" value="<?= $su->n_dias?>" id="n_dias" min="1" max="15">
			</div>
			<div>
				<label>Motivo</label>
				<input type="text" name="motivo" value="<?= $su->motivo ?>" id="motivo">
			</div>
			<div>
				<label>Observaciones</label>
				<input type="observaciones" name="observaciones" value="<?= $su->observaciones ?>" id="observaciones">
			</div>
			<div>
				<input type="submit" name="Ingresar"  onclick="alerta_actualizar(<?= $su->id_suspensiones; ?>)">
			</div>
		</form>
	<?php } ?>
	<?php $this->load->view('utils/alertsSuspensiones') ?>
</body>