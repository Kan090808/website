<?php get_header(); ?>
	
	<?php if(get_theme_mod('zlotus_featured_slider')) : ?>
	<?php get_template_part('inc/featured/featured'); ?>
	<?php endif; ?>
	
	<?php if(is_active_sidebar('sidebar-4')) : ?>
	<div class="sp-container newsletter-home-widget <?php if(get_theme_mod('zlotus_sidebar_homepage') == true) : ?>isfullwidth<?php endif; ?>">
		<div class="sp-row">
			<div class="sp-col-12">
				<div class="home-widget">
					<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-4') ) ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php if(is_active_sidebar('sidebar-2')) : ?>
	<div class="sp-container" id="top-instagram">
		<?php /* Instagram Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-2') ) ?>
	</div>
	<?php endif; ?>

	<div class="sp-container <?php if(get_theme_mod('zlotus_sidebar_homepage') == true) : ?>isfullwidth<?php endif; ?>">
		
		<div class="sp-row">
			
			<div id="main" <?php if(get_theme_mod('zlotus_sidebar_homepage') == true) : ?>class="fullwidth"<?php endif; ?>>
					
				<div class="sp-row post-layout <?php if(get_theme_mod('zlotus_home_layout') == 'full_grid' && !is_paged()) : ?>full-grid<?php elseif(get_theme_mod('zlotus_home_layout') == 'full_grid' && is_paged()) : ?>grid<?php elseif(get_theme_mod('zlotus_home_layout') == 'grid') : ?>grid<?php endif; ?>">
					
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php if(get_theme_mod('zlotus_home_layout') == 'grid') : ?>
						
						<?php get_template_part('content', 'grid'); ?>
					
					<?php elseif(get_theme_mod('zlotus_home_layout') == 'full_grid') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
					
					<?php elseif(get_theme_mod('zlotus_home_layout') == 'list') : ?>
					
						<?php get_template_part('content', 'list'); ?>
						
					<?php elseif(get_theme_mod('zlotus_home_layout') == 'full_list') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
					
					<?php else : ?>
						
						<?php get_template_part('content'); ?>
						
					<?php endif; ?>	
				
				<?php endwhile; ?>
					
					<?php zlotus_pagination(); ?>
				
				<?php endif; ?>
				
						
				</div>
			
			</div>

<?php if(get_theme_mod('zlotus_sidebar_homepage')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>