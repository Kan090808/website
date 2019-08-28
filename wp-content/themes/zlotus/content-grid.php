<div class="<?php if(is_home() && get_theme_mod('zlotus_sidebar_homepage') == true || is_archive() && get_theme_mod('zlotus_sidebar_archive') == true || is_search() && get_theme_mod('zlotus_sidebar_archive') == true) : ?>sp-col-4<?php else : ?>sp-col-6<?php endif; ?>">
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('zlotus-misc-thumb'); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="post-header">
		
		<?php if(!get_theme_mod('zlotus_post_cat')) : ?>
		<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
		<?php endif; ?>
		
		<h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
	
		<?php if(!get_theme_mod('zlotus_post_date')) : ?>
		<span class="sp-date"><a href="<?php echo get_permalink(); ?>"><span class="updated published"><?php the_time( get_option('date_format') ); ?></span></a></span>
		<?php endif; ?>
		
	</div>

</article>
</div>
