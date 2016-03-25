$(function () {
	
	$('.square').on('mouseenter', function(){
		
		$('.square').not(this).addClass('hover');
		
	}).on('mouseleave', function(){
		
		$('.square').not(this).removeClass('hover');
		
	});
	
});