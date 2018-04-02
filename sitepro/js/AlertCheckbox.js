$(function(){
	$('.checkbox').click(function(){
			if($(this).hasClass('uncheckbox')){		
				$(this).removeClass('uncheckbox').addClass('active_checkbox');
			 	$(this).children('input').attr('checked',true);
				return false;
			}else{
				$(this).removeClass('active_checkbox').addClass('uncheckbox');
			 	$(this).children('input').removeAttr('checked',false);
				return false;
			}
	});
	
	$.each($('.checkbox'),function(i,o){
		if($(o).children("input").attr('checked')){
			$(this).removeClass('uncheckbox').addClass('active_checkbox');
		}
	})
	
})