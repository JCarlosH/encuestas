// app
$(document).ready(function(){
	$('#SaveChanges01').click(function(event) {
		event.preventDefault();

		guardarencuesta();
	});

	function guardarencuesta(){
		res =$('#form_encuesta01').serialize();
		res = res + "&action=encuestaname";

		$('#loadingicon').removeClass('d-none');

		$.ajax({
			url: 'app/app.php',
			type: 'POST',
			data: res,
			success: function(response){
				if (response == "1") {
				swal("Correcto", "Se guardo el registro", "success");
				}else{
					swal("Ocurrio un error", response, "error");
				}
			},
			complete: function(){
              $('#loadingicon').addClass('d-none');
              }
		});
	}
	
	$('#verencuestas').click(function(event) {
		$.post('pages/tabla.php', function(data) {
			$('#contenido').html(data);
		});
	});
});