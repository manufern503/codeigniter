<br>
<br>
<br>
<br>
<br>
<body class="">
	<center>
	<form method="POST" action="<?php echo base_url('equipo_controller/agregar') ?>">
		<div>
			<label>Codigo equipo</label>
			<input type="number" name="cod" value="cod">
		</div>
		<div>
			<label>Tipo de bus</label>
			<select name="tipo">
				<option value="">--tipo--</option>
				<?php foreach($tipo_bus as $t) {?>
					<option value="<?php echo $t->id_tipo_bus ?>"><?php echo $t->tipo_bus ?></option>
				<?php  } ?>	
			</select>
		</div>
		<div>
			<label>Capacidad de personas</label>
			<input type="number" name="capacidad">
		<div>
		<div>
			<label>Marca</label>
			<select name="marca">
				<option value="">--marca--</option>
				<?php foreach($marca as $m) {?>
					<option value="<?php echo $m->id_marca ?>"><?php echo $m->nombre_marca ?></option>
				<?php  } ?>
			</select>
		</div>
		<div>
			<label>Placa</label>
			<input type="text" name="placa">
		</div>
		<div>
			<label>Compañia</label>
			<select name="compa">
				<option value="">--compañia--</option>
				<?php foreach($compania as $c) {?>
					<option value="<?php echo $c->id_compania ?>"><?php echo $c->nombre_compania ?></option>
				<?php  } ?>
			</select>
		</div>
		<div>
			<label>Estado</label>
			<select name="estado">
				<option value="">--estado--</option>
				<?php foreach($estado as $es) {?>
					<option value="<?php echo $es->id_estado ?>"><?php echo $es->nombre_estado ?></option>
				<?php  } ?>
			</select>
		</div>
		<div>
			<input type="submit" name="guardar">
		</div>
		<br>
	<br>
	<br>
	</form>
	<br>
	<br>
	<br>
	<table class="table table-dark">
		<thead>
			<tr>
				<th>Codigo del equipo</th>
				<th>Tipo de bus</th>
				<th>Capacidad de personas</th>
				<th>Marca</th>
				<th>Placa</th>
				<th>Compañia</th>
				<th>Estado</th>
				<th>Eliminar</th>
				<th>Actualizar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($equipo as $e) {?>
				<tr>
					<td><?php echo $e->cod_equipo ?></td>
					<td><?php echo $e->tipo_bus ?></td>
					<td><?php echo $e->capacidad_parsonas ?></td>
					<td><?php echo $e->nombre_marca ?></td>
					<td><?php echo $e->placa ?></td>
					<td><?php echo $e->nombre_compania ?></td>
					<td><?php echo $e->nombre_estado ?></td>
					<td><a href="<?php echo base_url('equipo_controller/eliminar/'.$e->cod_equipo) ?>">Eliminar</a></td>
					<td><a href="<?php echo base_url('equipo_controller/get_datos/'.$e->cod_equipo) ?>">Actualizar</a></td>
				</tr>
			<?php  } ?>
		</tbody>
	</table>
	</center>