$(document).on('ready', function(){
	definiSizes();
});
function definiSizes () {
	$('.form_container').each(function(i,el){
		$(el).css({
			'background-image': "url("+$(el).data("background")+")",
			'heigth': ($('.form_container').width() * 0,24)+ 'px',
			'width': ($('.form_container').width())+'px'
		});
	});
}