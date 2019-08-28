<?php 

$orig_post = $post;
global $post;

$categories = get_the_category($post->ID);

if ($categories) {

	$category_ids = array();

	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args = array(
		'category__in'     => $category_ids,
		'post__not_in'     => array($post->ID),
		'posts_per_page'   => 2,
		'ignore_sticky_posts' => 1,
		'orderby' => 'rand'
	);

	$my_query = new wp_query( $args );
	if( $my_query->have_posts() ) { ?>
		<div class="related-posts"><div class="sp-row">
		
			<div class="sp-col-12">
				<h4 class="related-heading"><?php esc_html_e( 'You Might Also Like...', 'zlotus' ); ?></h4>
			</div>
		
		<?php while( $my_query->have_posts() ) {
			$my_query->the_post();?>
			
			<div class="sp-col-6">
				<div class="item-related">
					
					<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
					<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('zlotus-misc-thumb'); ?></a>
					<?php endif; ?>
					
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					
					
				</div>
			</div>
			
		<?php
		}
		echo '</div></div>';
	}
}
$post = $orig_post;
wp_reset_postdata();

?>