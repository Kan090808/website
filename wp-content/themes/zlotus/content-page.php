<div class="sp-col-12">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if(!get_theme_mod('zlotus_page_title')) : ?>
	<div class="post-header">
		<h1><?php the_title(); ?></h1>
	</div>
	<?php endif; ?>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(''); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="post-entry">

		<?php the_content('', false); ?>
		<?php wp_link_pages(); ?>
		
	</div>
	
	<?php if(!get_theme_mod('zlotus_page_share') || !get_theme_mod('zlotus_page_author') || comments_open()) : ?>
	<div class="post-meta norelated">
		
		<?php if(!get_theme_mod('zlotus_page_author')) : ?>
		<div class="meta-author">
			<?php echo get_avatar( get_the_author_meta('email'), '60' ); ?><span class="by"><?php esc_html_e( 'by', 'zlotus' ); ?></span> <?php the_author_posts_link(); ?>
		</div>
		<?php endif; ?>
		
		<?php if(comments_open()) : ?>
		<div class="meta-comment">
			<a href="<?php comments_link(); ?>"><i class="fa fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?></a>
		</div>
		<?php endif; ?>
		
		<?php if(!get_theme_mod('zlotus_page_share')) : ?>
		<div class="post-share">
			<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
			<a target="_blank" href="https://twitter.com/intent/tweet?text=Check%20out%20this%20article:%20<?php print zlotus_social_title( get_the_title() ); ?>&url=<?php echo urlencode(the_permalink()); ?>"><i class="fa fa-twitter"></i></a>
			<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<a data-pin-do="none" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(the_permalink()); ?>&media=<?php echo esc_url($pin_image); ?>&description=<?php print zlotus_social_title( get_the_title() ); ?>"><i class="fa fa-pinterest"></i></a>
			<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
		</div>
		<?php endif; ?>
		
	</div>
	<?php endif; ?>

<?php if(comments_open()) : ?>
<?php comments_template( '', true );  ?>
<?php endif; ?>

</article>
</div>