<?php

get_header();
?>

<div class="content">
	
	<div class="post">

		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				
				$size_default = 50;
				
				$classes = get_field('color') . ' ';
				$classes .= get_field('size') . ' ';
				
		?>
		
		<div class="post-content">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		
		
		<?php
			endwhile;
		endif;

		?>
	
	</div>
</div>

<?php
get_footer();

?>