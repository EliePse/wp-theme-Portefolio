<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title><?php echo get_bloginfo( 'name' ); ?> - Porteforlio</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/aller.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=1" type="text/css">
		<?php wp_head(); ?>
</head>
<body class="<?php echo is_home() ? 'home' : ''; ?>">
	
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
			
			$query = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'posts_per_page'=>-1,
				'offset' => 0
			));
			
			if ($query->have_posts()) {
				
				while ($query->have_posts()) {
				
					$query->the_post();
					
					echo '<li label="'. $post->ID .'"><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
				
				}
				
			}
			?>
		</ul>
		
	</nav>