<br>
<br>
<br>
<body>
	<center>
		<div class="animated zoomInDown	" class="col-md-12">
			<h1 class="bg-dark text-white text-center">INGRESAR NUEVO USUARIO</h1>
		</div>
	</form>
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
					<form method="POST" action="<?php echo base_url('usuario_controller/guardar')?>" class="mx-auto" onsubmit="return validarFormularios()">
						<div>
							<label>nombre</label>
							<input type="text" name="nombre" id="nombre">
						</div>
						<div>
							<label>usuario</label>
							<input type="text" name="usuario" id="usuario">
						</div>
						<div>
							<label>correo</label>
							<input type="text" name="correo" id="correo">
						</div>
						<div>
							<label>rol</label>
							<select name="nombre_rol" id="nombre_rol">
								<option>--seleccione un rol</option>
								<?php foreach($nombre_rol as $nr){ ?>
									<option value="<?= $nr->id_rol ?>"><?= $nr->nombre_rol ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="animated heartBeat">
							<button type="submit" value="ingresar" class="btn btn-danger" >INGRESAR</button>
						</div>
					</div>
					<div class="modal-footer">

					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<table id="bye" class="table table-dark table-hover" >
				<thead>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="animated heartBeat">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">INGRESAR
				</button>
					</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div  class="animated bounceInLeft" class="col-md-12">
			<h1 class="bg-dark text-white text-center">REGISTRO DE USUARIOS</h1>
		</div>
				<tr>
					<th>nombre</th>
					<th>usuario</th>
					<th>corrreo</th>
					<th>rol</th>
					<th>eliminar</th>
					<th>actualizar</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($nombre as $n){ ?>
					<tr>
						<td><?= $n->nombre ?></td>
						<td><?= $n->usuario ?></td>
						<td><?= $n->correo ?></td>
						<td><?= $n->nombre_rol ?></td>
						<td><a  onclick="alerta_eliminar(<?= $n->id_usuario; ?> )" >  
							<i class="btn btn-danger btn-lg fa fa-trash-o"></i></a></td>
							<td><a href="<?php echo base_url('usuario_controller/get_datos/'.$n->id_usuario)?>"><i class="btn btn-success btn-lg fa fa-edit"></i></a></td>

						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</center>

	</body>
	<?php if (isset($mensaje)){ echo $mensaje; } ?>
	<script src="<?php echo base_url('props/bootstrap/js/datatables.min.js') ?>"></script>
		<!--Este Script es para funcionamiento de Datatables-->
		<script type="text/javascript">
			$(document).ready(function () {
				$('#bye').DataTable();
				$('.dataTables_length').addClass('bs-select');
			});
		</script>


	


	<?php $this->load->view('utils/alertUsuario') ?>