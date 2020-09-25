// change background and text colors
$('input[name=color-switch]').on('change', function() {
	if($(this).is(':checked')) {
		$('#site-content').css({'background-color':'#000','color':'#fff'});
	} else {
		$('#site-content').css({'background-color':'#fff','color':'#000'});
	}
});
