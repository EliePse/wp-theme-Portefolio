$(function () {
	
	$('.square, .nav-projects li').on('mouseenter', function(){
		
		var label = $(this).attr('label');
		
		$('.square').not('.square[label='+ label +']').addClass('hover');
		$('.nav-projects li[label='+ label +']').addClass('hover');
		
		$('.backimg[name='+ label + ']').show();
		
	}).on('mouseleave', function(){
		
		$('.square, .nav-projects li').removeClass('hover');
		$('.backimg').hide();
		
	});
	
});