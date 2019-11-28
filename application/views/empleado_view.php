
<br>
<br>
<br>
<body style="background-color: #FFFFE0">
	<form  autocomplete="off"  action="<?php echo base_url('empleado_controller/ingresar')  ?>" method="POST" onsubmit="return validarFormulario()">
		<center >
			<div class="animated zoomInDown	" class="col-md-12">
				<h1 class="bg-dark text-white text-center">INGRESAR NUEVO EMPLEADO</h1>
			</div>
			<br>
	
			<br>
			<div class="animated heartBeat">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">INGRESAR </button>
			</div>
			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<br>
						<div class="row">
							<div class="col-md-3" align="right"><label>Nombre de empleado</label></div>
							<div class="col-md-3"><input type="text" name="nombre_empleado" id="nombre_empleado" autocomplete="off" style="border-color: black"></div>

							<div class="col-md-3" align="right"><label>NIT</label></div>
							<div class="col-md-3"><input type="text" name="nit" id="nit"  onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" style="border-color: black"></div>
							<script type="text/javascript">
								$(function () {
									var selector = document.getElementById("nit");

									var im = new Inputmask("9999-999999-999-9");
									im.mask(selector);
								});
							</script>


						</div>
						<div class="row">
							<div class="col-md-3" align="right"><label>Apellido</label></div>
							<div class="col-md-3"><input type="text" name="apellido" id="apellido" maxlength="50" style="border-color: black"></div>
							<div class="col-md-3" align="right"><label>licencia</label></div>
							<div class="col-md-3"><input type="text" name="licencia" id="licencia"  onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" style="border-color: black"></div>
							<script type="text/javascript">
								$(function () {
									var selector = document.getElementById("licencia");

									var im = new Inputmask("9999-999999-999-9");
									im.mask(selector);
								}); </script>
							</div>

							<div class="row">
								<div class="col-md-3" align="right"><label>edad</label></div>
								<div class="col-md-3"><input type="number"  name="edad" id="edad" style="border-color: black"></div>

								<div class="col-md-3" align="right"><label>Cargo</label></div>
								<div class="col-md-3"><select name="nombre_cargo" id="nombre_cargo" >
									<option  value="">seleccione su cargo</option>
									<?php foreach ($nombre_cargo as $s) { ?>
										<option value="<?= $s->id_cargo ?>"><?= $s->nombre_cargo ?></option>
									<?php } ?>
								</select></div>
							</div>

							<div class="row">
								<div class="col-md-3" align="right"><label>Sexo</label></div>
								<div class="col-md-3"><select name="nombre_sexo" id="nombre_sexo">
									<option value="">seleccione su sexo</option>
									<?php foreach ($nombre_sexo as $s) { ?>
										<option value="<?= $s->id_sexo ?>"><?= $s->nombre_sexo ?></option>
									<?php } ?>
								</select></div>

								<div class="col-md-3" align="right"><label>Estado de empleado</label></div>
								<div class="col-md-3"><select name="nombre_estadoe" id="nombre_estadoe" >
									<option value="">seleccione su cargo</option>
									<?php foreach ($nombre_estadoe as $s) { ?>
										<option value="<?= $s->id_estado_empleado ?>"><?= $s->nombre_estadoe ?></option>
									<?php } ?>
								</select></div>
							</div>

							<div class="row">
								<div class="col-md-3" align="right"><label>Fecha de nacimiento</label></div>
								<div class="col-md-3"><input type="date" name="f_nacimiento" id="f_nacimiento"></div>
								<div class="col-md-3"></div>
								<div class="col-md-3"></div>
							</div>

							<div class="row">
								<div class="col-md-3" align="right"><label>DUI</label></div>
								<div class="col-md-3"><input type="text" name="dui" id="dui" maxlength="10" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"  style="border-color: black"></div>
								<div class="col-md-3"></div>
							</div>
							<script type="text/javascript">
								$(function () {
									var selector = document.getElementById("dui");

									var im = new Inputmask("99999999-9");
									im.mask(selector);
								});
							</script></div>
						</div>
						<div class="animated heartBeat">
							<button type="submit" value="ingresar" class="btn btn-danger" >INGRESAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div  class="animated bounceInLeft" class="col-md-12">
			<h1 class="bg-dark text-white text-center">REGISTRO DE EMPLEADO</h1>
		</div>
		<div>

			<table id="hola" class="table table-dark table-hover" >
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Edad</th>
						<th>Sexo</th>
						<th>F_nacimiento</th>
						<th>Dui</th>
						<th>Nit</th>
						<th>Licencia</th>
						<th>Cargo</th>
						<th>Estado</th>
						<td>eliminar</td>
						<td>actualizar</td>
					</tr> 
				</thead>
				<tbody>
					<?php foreach ($empleado as $e) { ?>
						<tr>
							<td><?= $e->nombre_empleado?></td>
							<td><?= $e->apellido?></td>
							<td><?= $e->edad?></td>
							<td><?= $e->nombre_sexo?></td>
							<td><?= $e->f_nacimiento?></td>
							<td><?= $e->dui?></td>
							<td><?= $e->nit?></td>
							<td><?= $e->licencia?></td>
							<td><?= $e->nombre_cargo?></td>
							<td><?= $e->nombre_estadoe?></td>

							<td><a class="btn btn-danger btn-lg fa fa-trash-o" onclick="alerta_eliminar('<?= $e->id_empleado ?>')"></a></td>

							<td><a class="btn btn-success btn-lg fa fa-edit" href="<?php echo base_url('empleado_controller/get_datos/'.$e->id_empleado) ?>"></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

		</center>
		<?php $this->load->view("utils/alertas_empleado") ?>
		<script src="<?php echo base_url('props/bootstrap/js/datatables.min.js') ?>"></script>
		<!--Este Script es para funcionamiento de Datatables-->
		<script type="text/javascript">
			$(document).ready(function () {
				$('#hola').DataTable();
				$('.dataTables_length').addClass('bs-select');
			});
		</script>

	</body>
	</html>