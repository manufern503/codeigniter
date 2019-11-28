<br>
<br>
<br>
<br>

<body>
	<center>
		<div  class="animated zoomInDown" class="col-md-12">
			<h1 class="bg-dark text-white text-center">INGRESAR NUEVO REGISTRO</h1>
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<form action="<?php echo base_url().'empleado_equipo_controller/ingresar' ?>" method="POST" onsubmit="return validar()">
							<div>
								<label>Empleado</label>
								<select name="empleado"  id="empleado">
									<option value="">Seleccione empleado</option>
									<?php foreach ($empleado as $e) { ?>
										<option value="<?= $e->id_empleado ?>"><?= $e->nombre_empleado." ".$e->apellido ?></option>
									<?php } ?>
								</select>
							</div>
							<div>
								<label>Codigo equipo</label>
								<select name="cod_equipo"  id="cod_equipo">
									<option value="">Seleccione codigo de equipo</option>
									<?php foreach ($equipo as $c) { ?>
										<option value="<?= $c->cod_equipo ?>"><?= $c->cod_equipo ?></option>
									<?php } ?>
								</select>
							</div>
							<div>
								<label>horario</label>
								<select name="horario" id="horario" >
									<option value="">Seleccione un horario</option>
									<?php foreach ($horario as $h) { ?>
										<option value="<?= $h->id_horario ?>"><?= $h->hora_inicial." ".$h->hora_final." ".$h->dias ?></option>
									<?php } ?>
								</select>
							</div>
							<div>
								<label>Ruta</label>
								<select name="ruta"  id="ruta">
									<option value="">Seleccione una ruta</option>
									<?php foreach ($ruta as $r) { ?>
										<option value="<?= $r->id_ruta ?>"><?= $r->nombre_ruta ?></option>
									<?php } ?>
								</select>
							</div>
							<center>
								<div class="animated heartBeat">
									<button type="submit" value="ingresar" class="btn btn-danger" >INGRESAR</button>
								</div>
							</center>
						</div>
						<div class="modal-footer">

						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<table class="table table-dark table-hover" >
					<br>
					<br>
					<br>
					<br>
					
					<div class="animated heartBeat">
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">INGRESAR
						</button>
					</div>
				</form>

			</form>
			<br>
			<br>
			<br>
			<br>
			<div  class="animated bounceInLeft" class="col-md-12">
				<h1 class="bg-dark text-white text-center">REGISTRO DE EMPLEADO Y EQUIPO</h1>
			</div>
			<table id="equipo" class="table table-hover table-dark">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre del empleado</th>
						<th>Apellido del empleado</th>
						<th>codigo de equipo</th>
						<th>hora inicial</th>
						<th>hora final</th>
						<th>dias</th>
						<th>nombre de ruta</th>
						<th>Eliminar</th>
						<th>Actualizar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($empleado_equipo as $ee) { ?>
						<tr>
							<td><?= $ee->id_empleado_equipo ?></td>
							<td><?= $ee->nombre_empleado ?></td>
							<td><?= $ee->apellido ?></td>
							<td><?= $ee->cod_equipo ?></td>
							<td><?= $ee->hora_inicial ?></td>
							<td><?= $ee->hora_final ?></td>
							<td><?= $ee->dias ?></td>
							<td><?= $ee->nombre_ruta ?></td>
							<td><button   class="btn btn-danger btn-lg fa fa-trash-o" onclick="alerta_eliminar(<?= $ee->id_empleado_equipo; ?>)"><a style="color: white;"></a></button></td>
							<td><a class="btn btn-success btn-lg fa fa-edit" href="<?= base_url('empleado_equipo_controller/get_datos/'.$ee->id_empleado_equipo) ?>"></a></td>
						</tr>	
					<?php } ?>
				</tbody>

			</table>
			<?php if (isset($mensaje)){ echo $mensaje; } ?>
		</center>


		<?php $this->load->view("utils/alerts_Empleado_equipo") ?>

		<script src="<?php echo base_url('props/bootstrap/js/datatables.min.js') ?>"></script>
		<!--Este Script es para funcionamiento de Datatables-->
		<script type="text/javascript">
			$(document).ready(function () {
				$('#equipo').DataTable();
				$('.dataTables_length').addClass('bs-select');
			});
		</script>

	</body>
