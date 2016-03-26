<?php 

get_header();

?>

<div class="content">
	
	<div class="toCenterY ghost"></div>
	<div class="mosaic toCenterY">
	<?php
	
	$query = new WP_Query(array(
		'post_type'=>'post',
		'post_status'=>'publish',
		'posts_per_page'=>-1,
		'offset' => 0
	));
	
	if ($query->have_posts()) :
		while ($query->have_posts()) :
			
			$query->the_post();
			
			$size_default = 50;
			
			$classes = get_field('color') . ' ';
			$classes .= get_field('size') . ' ';
			
			$style = 'left:'. get_field('posx') * $size_default .'px;';
			$style .= 'top:'. get_field('posy') * $size_default .'px;';
			$style .= 'width:'. get_field('size') * $size_default .'px;';
			$style .= 'height:'. get_field('size') * $size_default .'px;';
			
			echo '<a href="'. get_permalink() .'"><div label="'. $post->ID .'" class="square '. $classes .'" style="'. $style .'"><div></div></div></a>';
			echo '<div class="backimg" name="'. $post->ID .'" style="background-image: url('. wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) .');"></div>';
		
		endwhile;
	endif;

	?>
	
	</div>
</div>

<?php

get_footer();