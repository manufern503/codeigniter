<script src="<?php echo base_url('props/bootstrap/js/validacion_suspensiones.js');?>"></script>
<br>
<br>
<br>
<br>
<body>
	<center>
		<div class="animated zoomInDown	" class="col-md-12">
				<h1 class="bg-dark text-white text-center">INGRESAR NUEVA SUSPENCION</h1>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
	<div class="animated heartBeat">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">INGRESAR </button>
			</div>
			<div class="modal fade bd-example-modal-lg" style="background-color: black" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">

		<form action="<?php echo base_url().'suspensiones_controller/ingresar' ?>" method="POST" onsubmit="return validar()">
						<div>
				<label>Fecha</label>
				<input type="date" name="fecha" id="fecha">
			</div>
			<div>
				<label>Codigo del equipo</label>
				<select name="cod_equipo" id="cod_equipo">
					<option value="">--Seleccione una opcion</option>
					<?php foreach ($equipo as $e) { ?>
						<option value="<?= $e->cod_equipo ?>"><?= $e->cod_equipo ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label>Nombre del empleado</label>
				<select name="empleado" id="empleado">
					<option value="">--Seleccione una opcion</option>
					<?php foreach ($empleado as $e) { ?>
						<option value="<?= $e->id_empleado ?>"><?= $e->nombre_empleado." ".$e->apellido ?></option>
					<?php } ?>
				</select>
			</div>

			<div>
				<label>Numero de dias de suspension</label>
				<input type="number" name="n_dias" id="n_dias" min="1" max="15">
			</div>
			<div>
				<label>Motivo</label>
				<input type="text" name="motivo" id="motivo">
			</div>
			<div>
				<label>Observaciones</label>
				<input type="observaciones" name="observaciones" id="observaciones">
			</div>

                          <div class="animated heartBeat">
							<button type="submit" value="ingresar" class="btn btn-danger" >INGRESAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	
			
			
			
			
			
			
		</div>
		</form>
		</center>
		<center>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="animated bounceInLeft	" class="col-md-12">
				<h1 class="bg-dark text-white text-center">REGSITRO DE SUSPENCIONES</h1>
			</div>
		<table id="sus" class="table table-dark table-hover" >
			<thead>
				<tr>
					<th>ID</th>
					<th>Fecha</th>
					<th>codigo del equipo</th>
					<th>Empleado</th>
					<th>numero de dias</th>
					<th>motivo</th>
					<th>Observaciones</th>
					<th>Eliminar</th>
					<th>Actualizar</th>
				</tr>
				<tbody>
					<?php foreach ($suspensiones as $s) { ?>
						<tr>
							<td><?= $s->id_suspensiones ?></td>
							<td><?= $s->fecha ?></td>
							<td><?= $s->cod_equipo ?></td>
							<td><?= $s->nombre_empleado." ".$s->apellido ?></td>
							<td><?= $s->n_dias ?></td>
							<td><?= $s->motivo ?></td>
							<td><?= $s->observaciones ?></td>
							<td><button type="button" class="btn btn-danger" onclick="alerta_eliminar(<?= $s->id_suspensiones; ?>)"><a style="color: white;">Eliminar</a></button></td>
							<td><a class="btn btn-success btn-lg fa fa-edit"  href="<?= base_url('suspensiones_controller/get_datos/'.$s->id_suspensiones) ?>"></a></td>
						</tr>	
					<?php } ?>
				</tbody>
			</thead>
		</table>
		</center>

</script>
		<?php if (isset($mensaje)){ echo $mensaje; } ?>
		<script src="<?php echo base_url('props/bootstrap/js/datatables.min.js') ?>"></script>
		<!--Este Script es para funcionamiento de Datatables-->
		<script type="text/javascript">
			$(document).ready(function () {
				$('#sus').DataTable();
				$('.dataTables_length').addClass('bs-select');
			});
		</script>

	
</body>
<?php $this->load->view('utils/alertsSuspensiones') ?>