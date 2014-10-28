$(function(){
	$('#buscar').focus();
	$('#buscador').submit(function(e){
		e.preventDefault();
	})

	$('#buscar').keyup(function(){
		var envio = $('#buscar').val();
		$('#logo').html('<h2>buscador de dondstoy</h2><hr>');
		$('#resultados').html('<h2><img src="img/loading1.gif" width="20" alt=""> Cargando</h2>');


		$.ajax({
			type: 'POST',
			url : 'php/buscador.php',
			data: ('buscar='+envio),
			success : function(resp){
				if (resp!='') {
						$('#resultados').html(resp);
				}
			}
		})
	})
})