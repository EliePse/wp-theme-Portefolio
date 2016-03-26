	
	<div class="copyright"> <h6>Droits Réservés - <?php echo date("Y"); ?></h6> </div>
	
	<?php wp_footer(); ?>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<?php if(is_home()) : ?>
		
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
		
	<?php endif; ?>
</body>
</html>