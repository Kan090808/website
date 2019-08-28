<div class="sp-col-12">
<article id="post-<?php the_ID(); ?>" <?php post_class('list-item'); ?>>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('zlotus-misc-thumb'); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="list-content">
		<div class="post-header">
			
			<?php if(!get_theme_mod('zlotus_post_cat')) : ?>
			<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
			<?php endif; ?>
			
			<h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<?php if(!get_theme_mod('zlotus_post_date')) : ?>
			<span class="sp-date"><a href="<?php echo get_permalink(); ?>"><span class="updated published"><?php the_time( get_option('date_format') ); ?></span></a></span>
			<?php endif; ?>
			
		</div>
		
		<div class="post-entry">
					
			<p><?php echo zlotus_string_limit_words(get_the_excerpt(), 26); ?>&hellip;</p>
			
		</div>
	</div>
	
</article>
</div>
