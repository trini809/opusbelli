// change background and text colors
$('input[name=color-switch]').on('change', function() {
	if($(this).is(':checked')) {
		$('#site-content, body').css({'background-color':'#000','color':'#fff'});
		$('a').css('color', '#fff');
		$('.menu-item a').css('border-bottom','2px solid #000');
	} else {
		$('#site-content, body').removeAttr('style');
		$('a').removeAttr('style');
		$('.menu-item a').removeAttr('style');
	}
});
