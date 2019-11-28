<br>
<br>
<br>


<body >
	<div  class="animated zoomInDown" class="col-md-12">
		<h1 class="bg-dark text-white text-center">INGRESAR NUEVA COMPAÑIA</h1>
	</div>
	<div >
		<center>
			

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

							<form  action="<?php echo base_url('compania_controller/ingresar') ?>" method="POST"  onsubmit="return validar()">
								<center>

									<div>
										<label>Nombre compania</label>
										<input type="text" name="nombre_compania" id="nombre_compania">
									</div>
									<div>
										<label>Direccion</label>
										<input type="text" name="direccion" id="direccion">
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
						<br>
						<br>
						<br>
						<br>
						<div class="animated heartBeat">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">INGRESAR
							</button>
						</div>
					</form>
					<br>
					<br>
					<br>
					<br>
					<div  class="animated bounceInLeft" class="col-md-12">
						<h1 class="bg-dark text-white text-center">REGISTRO DE COMPAÑIA</h1>
					</div>
					<table id="compa" class="table table-dark table-hover" >
						<thead>
							<tr>
								<th>Compañia</th>
								<th>Direccion</th>
								<th>eliminar</th>
								<th>actualizar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($compania as $c) { ?>
								<tr>
									<td><?= $c->nombre_compania?></td>
									<td><?= $c->direccion?></td>
									<td><a class="btn btn-danger btn-lg fa fa-trash-o" onclick="alerta_eliminar_compania('<?= $c->id_compania ?>')"></a></td>
									<td><a class="btn btn-success btn-lg fa fa-edit" href="<?php echo base_url('compania_controller/get_datos/'.$c->id_compania) ?>"></a></td>
								</tr>
							<?php } ?>
							
						</table>
					</tbody>
				</div> 
			</center>
			<?php $this->load->view("utils/alertas_compania") ?>
			<script src="<?php echo base_url('props/bootstrap/js/datatables.min.js') ?>"></script>
			<!--Este Script es para funcionamiento de Datatables-->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#compa').DataTable();
					$('.dataTables_length').addClass('bs-select');
				});
			</script>

		</body>
		</html>