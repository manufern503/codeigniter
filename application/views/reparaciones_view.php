<script src="<?php echo base_url('props/bootstrap/js/reparaciones.js');?>"></script>
<br>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('props/bootstrap/css/bootstrap.min.css') ?>">
<body>
	<center>
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">NUEVA REPARACIÓN</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="<?php echo base_url('reparaciones_controller/guardar')?>" class="mx-auto" onsubmit="return validarFormularios()">
							<div>
								<label>costo</label>
								<input type="number" name="costo" id="costo">

							</div>

							<div>
								<label>descripcion</label>
								<input type="text" name="descripcion" id="descripcion">
							</div>
							<div>
								<label>fecha</label>
								<input type="date" name="fecha" id="fecha">
							</div>
							<div class="contrainer">
								<div>
									<label>tipo de incidencia</label>
									<select name="tipo_incidencias" id="tipo_incidencias">
										<option value="">--seleccione una incidencia--</option>
										<?php foreach($tipo_incidencias as $ti){ ?>
											<option value="<?= $ti->id_tipo_incidencias ?> "> <?= $ti->tipo_incidencias ?></option>
										<?php } ?>
									</select>
								</div>
								<div>
									<label>codigo</label>
									<select name="cod_equipo" id="cod_equipo">
										<option value="">--seleccione un equipo--</option>
										<?php foreach($cod_equipo as $ce){ ?>
											<option value="<?= $ce->cod_equipo ?> "> <?= $ce->cod_equipo ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div>
								<input type="submit" name="guardar" value="INGRESAR" class="btn btn-danger">
							</div>
						</div>
						<div class="modal-footer">

						</div>
					</div>
				</div>
			</div> 
			<div class="container">
			</form>
			<br>
			<br>
			<div  class="animated zoomInDown" class="col-md-12">
				<h1 class="bg-dark text-white text-center">INGRESAR NUEVA REPARACIÓN</h1>
			</div>
			<div>
				<table id="repara" class="table table-dark table-hover" >
					<thead>
					<br>
					<br>
					<br>
					<br>
					<div class="animated heartBeat">
						<button class="btn btn-danger" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ingresar </button>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div  class="animated bounceInLeft" class="col-md-12">
						<h1 class="bg-dark text-white text-center">REGISTRO DE  REPARACIÓN</h1>
					</div>
					<div>
						<tr>
							<td>#</td>
							<td>costo</td>
							<td>descripcion</td>
							<td>fecha</td>
							<td>tipo de incidencia</td>
							<td>numero de equipo</td>
							<td>eliminar</td>
							<td>actualizar</td>
						</tr>
						</thead>
						<tbody>
						<?php $n = 1; foreach($costo as $co){ ?>
							<tr>
								<td><?= $n; $n++; ?></td>
								<td><?= $co->costo ?></td>
								<td><?= $co->descripcion ?></td>
								<td><?= $co->fecha ?></td>
								<td><?= $co->tipo_incidencias ?></td>
								<td><?= $co->cod_equipo ?></td>
								<td><a  onclick="alerta_eliminar(<?= $co->id_reparaciones; ?>)"><a  style="color: white; width: 10px; height: 10px; ">
									<i class="btn btn-danger btn-lg fa fa-trash-o"></i></a></a></td>
									<td><a href="<?php echo base_url('reparaciones_controller/get_datos/'.$co->id_reparaciones)?>">
										<i class="btn btn-success btn-lg fa fa-edit"></i></a></td>
									</tr>
								<?php } ?>
							</table>
						</div>
						</tbody>
					</center>


					<?php if (isset($mensaje)){ echo $mensaje; } ?>
					<script src="<?php echo base_url('props/bootstrap/js/datatables.min.js') ?>"></script>
					<!--Este Script es para funcionamiento de Datatables-->
					<script type="text/javascript">
						$(document).ready(function () {
							$('#repara').DataTable();
							$('.dataTables_length').addClass('bs-select');
						});
					</script>
				</div>


				<?php $this->load->view('utils/alertReparaciones') ?>