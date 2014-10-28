$(function(){
	$('.buscar').focus();
	$('.buscar').submit(function(e){
		e.preventDefault();
	})

	$('.buscar').keyup(function(){
		var envio = $('.buscar').val();
		$('#logo').html('<h2></h2><hr>');
		$('#resultados').html('<h2 class="buscando">Buscando......</h2>');


		$.ajax({
			type: 'POST',
			url : 'funciones/buscador.php',
			data: ('buscar='+envio),
			success : function(resp){
				if (resp!='') {
						$('#resultados').html(resp);
				}
			}
		})
	})
})