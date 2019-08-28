<article class="post none-content">
					
	<div class="post-header">
	
			<h1><?php esc_html_e( 'Nothing Found', 'zlotus' ); ?></h1>
		
	</div>
	
	<div class="post-entry nothing">
	
		<?php if ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'zlotus' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'zlotus' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
		
	</div>
	
</article>