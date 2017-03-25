
$("input").on('focusout', function(){
	$(this).each(function(i, e){
		if($(e).val() != ""){
			$(e).addClass('not-empty');
		}else{
			$(e).removeClass('not-empty');
		}
	});
});


		