

function liberarPago(id){
	cadena = "id=" + id;

	$.ajax({
		type:"POST",
		url:"../Controllers/eliminarPagoControllers.php",
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


function EliminarPago(id){
	Swal.fire({
		title: 'Desea Eliminar el Pago ?',
		imageUrl: '../assets/img/logoCasita.png',
		text: "Eliminar pago "+id+" del Sistema!",
		imageWidth: 250,
		imageHeight: 250,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si, Eliminar!'
	}).then((result) => {
		if (result.value) {
			liberarPago(id);
		}
	})
}