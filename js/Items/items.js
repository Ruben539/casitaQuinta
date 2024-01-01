

function liberarItems(id){
	cadena = "id=" + id;

	$.ajax({
		type:"POST",
		url:"../Controllers/eliminarItemControllers.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				Swal.fire({
					type: 'success',                          
					title: 'Eliminado con Exito!'
				}).then((result) => {
					if (result.value) {
						window.location.href = "";                          
					}
				})
				
			}else{
				Swal.fire({
					type: 'error',
					title: 'Error al Eliminar',                          
				});
			}
		}
	});
}


function EliminarItems(id){
	Swal.fire({
		title: 'Desea Eliminar el detalle ?',
		imageUrl: '../assets/img/logoCasita.png',
		text: "Eliminar detalle "+id+" del Sistema!",
		imageWidth: 250,
		imageHeight: 250,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si, Eliminar!'
	}).then((result) => {
		if (result.value) {
			liberarItems(id);
		}
	})
}