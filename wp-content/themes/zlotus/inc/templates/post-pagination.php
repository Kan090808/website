<?php
	$prev_post = get_previous_post();
	$next_post = get_next_post();
?>
<?php if (!empty( $prev_post ) || !empty( $next_post )) : ?>
<div class="post-pagination sp-row">
	
	<div class="sp-col-6 prev">
		<?php if (!empty( $prev_post )) : ?>
		<div class="pagination-item prev">
			<div class="pagination-img">	
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo get_the_post_thumbnail($prev_post->ID, 'zlotus-misc-thumb'); ?></a>
			</div>
			<div class="pagination-content">
				<span class="pagination-text"><?php esc_html_e( 'Previous Post', 'zlotus' ); ?></span>
				<h3><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo esc_html($prev_post->post_title); ?></a></h3>
			</div>
		</div>
		<?php endif; ?>
	</div>

	
	<div class="sp-col-6">
		<?php if (!empty( $next_post )) : ?>
		<div class="pagination-item next">
			<div class="pagination-img">
				<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_post_thumbnail($next_post->ID, 'zlotus-misc-thumb'); ?></a>
			</div>
			<div class="pagination-content">
				<span class="pagination-text"><?php esc_html_e( 'Next Post', 'zlotus' ); ?></span>
				<h3><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo esc_html($next_post->post_title); ?></a></h3>
			</div>
		</div>
			<?php endif; ?>
	</div>
			
</div>
<?php endif; ?>