<?php 

get_header();

?>

<div class="content">
	
	<div class="toCenterY ghost"></div>
	<div class="mosaic toCenterY">
	<?php
	if (have_posts()) :
		while (have_posts()) : the_post();
			
			$size_default = 50;
			
			$classes = get_field('color') . ' ';
			$classes .= get_field('size') . ' ';
			
			$style = 'left:'. get_field('posx') * $size_default .'px;';
			$style .= 'top:'. get_field('posy') * $size_default .'px;';
			$style .= 'width:'. get_field('size') * $size_default .'px;';
			$style .= 'height:'. get_field('size') * $size_default .'px;';
			
			echo '<div class="square '. $classes .'" style="'. $style .'"><div></div></div>';
		
		
		endwhile;
	endif;

	?>
	
	</div>
</div>

<?php

get_footer();