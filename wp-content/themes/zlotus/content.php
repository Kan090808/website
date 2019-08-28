<div class="sp-col-12">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-header">
		
		<?php if(!get_theme_mod('zlotus_post_cat')) : ?>
		<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
		<?php endif; ?>
		
		<?php if(is_single()) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
			<h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
		
		<?php if(!get_theme_mod('zlotus_post_date')) : ?>
		<span class="sp-date"><a href="<?php echo get_permalink(); ?>"><span class="updated published"><?php the_time( get_option('date_format') ); ?></span></a></span>
		<?php endif; ?>
		
	</div>
	
	<?php if(has_post_format('gallery')) : ?>
	
		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>
		
		<?php if($images) : ?>
		<div class="post-img">
		<div class="sideslides">
		<ul class="bxslider">
		<?php foreach($images as $image) : ?>
			
			<?php $the_image = wp_get_attachment_image_src( $image, 'sprout_spoon_full-thumb' ); ?> 
			<?php $the_caption = get_post_field('post_excerpt', $image); ?>
			<li><img src="<?php echo esc_url($the_image[0]); ?>" <?php if($the_caption) : ?>title="<?php echo esc_html($the_caption); ?>"<?php endif; ?> /></li>
			
		<?php endforeach; ?>
		</ul>
		</div>
		</div>
		<?php endif; ?>
	
	<?php elseif(has_post_format('video')) : ?>
	
		<div class="post-img">
			<?php $sp_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
			<?php if(wp_oembed_get( $sp_video )) : ?>
				<?php echo wp_oembed_get($sp_video); ?>
			<?php else : ?>
				<?php echo wp_kses_post($sp_video); ?>
			<?php endif; ?>
		</div>
	
	<?php elseif(has_post_format('audio')) : ?>
	
		<div class="post-img audio">
			<?php $sp_audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
			<?php if(wp_oembed_get( $sp_audio )) : ?>
				<?php echo wp_oembed_get($sp_audio); ?>
			<?php else : ?>
				<?php echo wp_kses_post($sp_audio); ?>
			<?php endif; ?>
		</div>
	
	<?php else : ?>
	
		<?php if(has_post_thumbnail()) : ?>
		<?php if(get_theme_mod('zlotus_post_thumb') == 'no_display') : elseif(get_theme_mod('zlotus_post_thumb') == 'ho_display') : ?>
			
			<?php if(is_single()) : else : ?>
				<div class="post-img">
					<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(''); ?></a>
				</div>
			<?php endif; ?>
				
		<?php else : ?>
			<div class="post-img">
				<?php if(is_single()) : ?>
					<?php the_post_thumbnail(''); ?>
				<?php else : ?>
					<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(''); ?></a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?>
	
	
	<div class="post-entry">
		
		<?php if(is_single()) : ?>
		
			<?php the_content('', false); ?>
			
		<?php else : ?>
		
			<?php if(get_theme_mod('zlotus_post_summary') == 'full') : ?>
				
				<?php the_content('', false); ?>
				
			<?php else : ?>
				
				<p><?php echo zlotus_string_limit_words(get_the_excerpt(), 68); ?>&hellip;</p>
				
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php wp_link_pages(); ?>
		
		<?php if(!get_theme_mod('zlotus_post_tags')) : if(is_single()) : if(has_tag()) : ?>
			<div class="post-tags">
				<?php the_tags("",""); ?>
			</div>
		<?php endif; endif; endif;?>	
		
	</div>
	
	<div class="post-meta <?php if(get_theme_mod('zlotus_post_related')) : ?>norelated<?php endif; ?>">
		
		<?php if(!is_single()) : ?>
		<div class="read-more">
			<a href="<?php echo get_permalink() ?>"><?php esc_html_e( 'Keep Reading', 'zlotus' ); ?></a>
		</div>
		<?php else : ?>
		<?php if(!get_theme_mod('zlotus_post_share_author')) : ?>
		<div class="meta-author">
			<?php echo get_avatar( get_the_author_meta('email'), '60' ); ?><span class="by"><?php esc_html_e( 'by', 'zlotus' ); ?></span> <span class="vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span>
		</div>
		<?php endif; ?>
		<?php endif; ?>
		
		<?php if(!get_theme_mod('zlotus_post_comment_link')) : ?>
		<div class="meta-comment">
			<a href="<?php comments_link(); ?>"><i class="fa fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?></a>
		</div>
		<?php endif; ?>
		
		<?php if(!get_theme_mod('zlotus_post_share')) : ?>
		<div class="post-share">
			<a target="_blank" title="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
			<a target="_blank" title="Twitter" href="https://twitter.com/intent/tweet?text=Check%20out%20this%20article:%20<?php print zlotus_social_title( get_the_title() ); ?>&url=<?php echo urlencode(the_permalink()); ?><?php if(get_theme_mod('zlotus_twitter')) : ?>&via=<?php echo esc_html(get_theme_mod('zlotus_twitter')); ?><?php endif; ?>"><i class="fa fa-twitter"></i></a>
			<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<a data-pin-do="none" target="_blank" title="Pinterest" href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(the_permalink()); ?>&media=<?php echo esc_url($pin_image); ?>&description=<?php print zlotus_social_title( get_the_title() ); ?>"><i class="fa fa-pinterest"></i></a>
			<a target="_blank" title="Google+" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
			<a target="_blank" title="Linked In" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i></a>
		</div>
		<?php endif; ?>
		
	</div>

<?php if(!get_theme_mod('zlotus_post_related')) : ?>	
<?php if(is_single()) : ?>
	<?php get_template_part('inc/templates/post-related'); ?>
<?php endif; ?>
<?php endif; ?>

<?php comments_template( '', true );  ?>

<?php if(!get_theme_mod('zlotus_post_pagination_hide')) : ?>	
<?php if(is_single()) : ?>
	<?php get_template_part('inc/templates/post-pagination'); ?>
<?php endif; ?>
<?php endif; ?>

</article>
</div>
