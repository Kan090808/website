<?php

	/* Template Name: Page w/ Featured Area */

?>
<?php get_header(); ?>
	
	<?php get_template_part('inc/featured/featured'); ?>
	
	<?php if(is_active_sidebar('sidebar-4')) : ?>
	<div class="sp-container">
		<div class="sp-row">
			<div class="sp-col-12">
				<div class="home-widget">
					<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-4') ) ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="sp-container">
		
		<div class="sp-row">
			
			<div id="main">
			
				<div class="sp-row post-layout">
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<?php get_template_part('content', 'page'); ?>
							
					<?php endwhile; ?>
					
					<?php endif; ?>
				
				</div>
				
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>