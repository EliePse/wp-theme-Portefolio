<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 450, 450, array( 'center', 'center')  );

function register_my_menus() {
	register_nav_menus(
		array(
			'head' => __( 'Head Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );