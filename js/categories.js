$(document).ready(function(){
	$('.category_item').click(function(){
	    var category = $(this).attr('id');
	    if(category == 'all'){
		    $('.animal_item').addClass('hide');
		    setTimeout(function(){
			    $('.animal_item').removeClass('hide');
		    }, 300);
	    } else {
		    $('.animal_item').addClass('hide');
		    setTimeout(function(){
			    $('.' + category).removeClass('hide');
		    }, 300);
	    }	
	});
});