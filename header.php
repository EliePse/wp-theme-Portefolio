<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title><?php echo get_bloginfo( 'name' ); ?> - Porteforlio</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/aller.css">
		<?php wp_head(); ?>
</head>
<body>
	
	<nav>
	
		<h1><a href="<?php bloginfo('url'); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
		
		<?php
		wp_nav_menu(array(
			'theme_location' => 'head',
			'menu_class' => 'nav-list nav-head',
			'container' => ''
		));
		?>
		
		<ul class="nav-projects nav-list">
			<h3 class="nav-h3">Travaux</h3>
			<?php
			if (have_posts()) {
				while (have_posts()) : the_post();
				
				echo '<li label="'. $post->ID .'"><a href="'. get_permalink() .'"">';
				the_title();
				echo '</a></li>';
				
				endwhile;
			}
			?>
		</ul>
		
	</nav>