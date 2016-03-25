$(function () {
	
	$('.square').on('mouseenter', function(){
		
		$('.square').not(this).addClass('hover');
		$('.backimg[name='+ $(this).attr('label') + ']').show();
		
	}).on('mouseleave', function(){
		
		$('.square').not(this).removeClass('hover');
		$('.backimg').hide();
		
	});
	
});