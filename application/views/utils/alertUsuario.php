<?php 
if(isset($msj)){
	if($msj == 'success'){ ?>
		<script>
			Swal.fire({
				title: 'agregado correctamente!!!',
				text: "se ha insertado exitosamente",
				icon: 'success',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonColor: 'Aceptar'
			}).then((result) =>{
				if(result.value){
					window.location.href ="../usuario_controller/index";
				}
			})
			
		</script>
	<?php }

	if($msj=='modi'){ ?>
		<script>
			Swal.fire({
				title: 'Modificado correctamente!!!',
				text: "Modificado exitosamente",
				icon: 'success',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonColor: 'Aceptar'
			}).then((result) =>{
				if(result.value){
					window.location.href ="../usuario_controller/index";
				}
			})
		</script>
		<?php }
		if($msj== 'ErrorM'){ ?>
				<script>
			Swal.fire({
				title: 'No se modifico el registro!!!',
				text: "Hubo un error al modificar o no realizo ninguna modificación",
				icon: 'error',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'Aceptar'
			}).then((result) => {
				if (result.value) {
					window.location.href = "../usuario_controller/index";
				}
			})
		</script>	
		<?php }	
}

 ?>

 <script>
 	function alerta_eliminar(id){
 				Swal.fire({
			title: 'Esta seguro que desea eliminar?',
			text: "Esta accion no se podra deshacer!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, eliminar!'
		}).then((result) => {
			if (result.value) {
				window.location.href = "eliminar/"+id;
			}
		})
 	}
 </script>