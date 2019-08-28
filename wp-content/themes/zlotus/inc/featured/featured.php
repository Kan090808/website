<div class="featured-area">
	
	<div class="sp-container">
		
		<div class="sp-row">
			
			<?php
				// Get featured posts
				$featured_cat = get_theme_mod( 'zlotus_featured_cat' );
				$get_featured_posts = get_theme_mod('zlotus_featured_id');
				
				if($get_featured_posts) {
					$featured_posts = explode(',', $get_featured_posts);
					$args = array( 'showposts' => 3, 'post_type' => array('post', 'page'), 'post__in' => $featured_posts, 'orderby' => 'post__in', 'ignore_sticky_posts' => true );
				} else {
					$args = array( 'cat' => $featured_cat, 'showposts' => 3, 'ignore_sticky_posts' => true );
				}
				
				$feat_query = new WP_Query( $args );
				
				$feat_count = 0;
				
				if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post();
				
				$feat_count++;
			?>
				
				<?php
					// Get slider image
					if(get_post_meta( get_the_ID(), 'meta-image', true )) :
					
						$feat_image = get_post_meta( get_the_ID(), 'meta-image', true );
						
					else :
					
						if(has_post_thumbnail()) {
							$get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
							$feat_image = $get_feat_image[0];
						} else {
							$feat_image = get_template_directory_uri() . '/img/slider-default.png';
						}
					
					endif;
					
					// Get title
					if(get_post_meta( get_the_ID(), 'meta-textarea', true )) :
						$feat_title = get_post_meta( get_the_ID(), 'meta-textarea', true );
					else :
						$feat_title = get_the_title();
					endif;
					
					
				?>
				
				<?php if($feat_count == 1) : ?>
				<div class="sp-col-8">
					
					<div class="feat-item large-feat" style="background-image:url(<?php echo $feat_image; ?>)">
						<a href="<?php echo get_permalink(); ?>" class="feat-link"></a>
						<div class="feat-overlay">
							<?php if(!get_theme_mod( 'zlotus_featured_cat_hide' )) : ?>
							<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
							<?php endif; ?>
							<h4><a href="<?php echo get_permalink(); ?>"><?php echo $feat_title; ?></a></h4>
						</div>
					</div>
					
				</div>
				<?php else : ?>
				<div class="sp-col-4">
				
					<div class="feat-item small-feat <?php if($feat_count == 2) : ?>first<?php endif; ?>" style="background-image:url(<?php echo $feat_image; ?>)">
						<a href="<?php echo get_permalink(); ?>" class="feat-link"></a>
						<div class="feat-overlay">
							<?php if(!get_theme_mod( 'zlotus_featured_cat_hide' )) : ?>
							<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
							<?php endif; ?>
							<h4><a href="<?php echo get_permalink(); ?>"><?php echo $feat_title; ?></a></h4>
						</div>
					</div>
					
				</div>
				<?php endif; ?>
			
			<?php endwhile; endif; ?>
	
		</div>
	
	</div>
	
</div>