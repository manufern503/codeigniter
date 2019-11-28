
<body>
	<center>
		<?php foreach($costo as $co){ ?>
			<form method="POST"  action="<?php echo base_url('reparaciones_controller/actualizar')?>" onsubmit="return validarFormularios()">
			<div>
				<label>Costo</label>
				<input type="hidden" name="id" value="<?= $co->id_reparaciones?>">
				<input type="number" name="costo" id="costo" value="<?= $co->costo?>">
			</div>
			<div>
				<label>Descripcion</label>
				<input type="text" name="descripcion" id="descripcion" value="<?= $co->descripcion?>">
			</div>
			<div>
				<label>Fecha</label>
				<input type="date" name="fecha" id="fecha" value="<?= $co->fecha ?>">
			</div>
			</div>
			<div>
				<label>Tipo de incidencia</label>
				<select name="tipo_incidencias" id="tipo_incidencias">
					<option value="">--seleccione una incidencia--</option>
					<?php foreach($tipo_incidencias as $ti){ ?>
						<option value="<?= $ti->id_tipo_incidencias ?>"<?php if($ti->tipo_incidencias==$co->tipo_incidencias){ echo "selected"; } ?> > <?= $ti->tipo_incidencias ?></option>
					<?php } ?>
				</select>
			</div>
				<div>
				<label>Numero de equipo</label>
				<select name="cod_equipo" id="cod_equipo">
					<option value="">--seleccione un equipo--</option>
					<?php foreach($cod_equipo as $ce){ ?>
						<option value="<?= $ce->cod_equipo ?> "<?php if($ce->cod_equipo==$co->cod_equipo){ echo "selected"; }?>> <?= $ce->cod_equipo ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<input type="submit" name="actualizar" value="actualizar">
			</div>
			<?php } ?>
		</form>
	</center>
	
