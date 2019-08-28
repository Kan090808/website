<?php
// Set Content Width

if ( ! isset( $content_width ) )
	$content_width = 1080;

// Theme set up

add_action( 'after_setup_theme', 'zlotus_theme_setup' );

if ( !function_exists('zlotus_theme_setup') ) {

	function zlotus_theme_setup() {
	
		// Register navigation menu
		register_nav_menus(
			array(
				'main-menu' => esc_html__('Primary Menu', 'zlotus'),
			)
		);
		
		// Localization support
		load_theme_textdomain('zlotus', get_template_directory() . '/lang');
		
		// Post Thumbnails
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'zlotus-misc-thumb', 520, 400, true );
		
		// Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );
		
		// Title tag
		add_theme_support( 'title-tag' );
		
		// Feed Links
		add_theme_support( 'automatic-feed-links' );
		
		// WooCommerce Support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		
	}

}

// Register & enqueue styles/scripts

add_action( 'wp_enqueue_scripts','zlotus_load_scripts' );

function zlotus_load_scripts() {

	// Register scripts and styles
	wp_enqueue_style('zlotus-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
	
	if(!get_theme_mod('zlotus_responsive')) {
	wp_enqueue_style('zlotus-respon', get_template_directory_uri() . '/css/responsive.css');
	}
	
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array( 'jquery' ), '', true);
	wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/fitvids.js', 'jquery', array( 'jquery' ), '', true);
	wp_enqueue_script('zlotus-scripts', get_template_directory_uri() . '/js/zlotus.js', array( 'jquery' ), '', true);
	
	// Register Fonts
	function zlotus_fonts_url() {
		$font_url = '';
		
		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'zlotus' ) ) {
			$font_url = add_query_arg( 'family', urlencode( 'Work Sans:400,500,600,700|Montserrat:400,500,600,700' ), "//fonts.googleapis.com/css" );
		}
		return $font_url;
	}
	// Enqueue fonts
	wp_enqueue_style( 'zlotus_fonts', zlotus_fonts_url(), array(), '1.0.0' );

	if (is_singular() && get_option('thread_comments'))	wp_enqueue_script('comment-reply');
	
}

//////////////////////////////////////////////////////////////////
// Register widgets
//////////////////////////////////////////////////////////////////
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'zlotus'),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Widgets here will appear vertically to the right of your content.', 'zlotus'),
	));
	register_sidebar(array(
		'name' => esc_html__('Instagram Header', 'zlotus'),
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="instagram-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="instagram-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Use the "Instagram" widget here. IMPORTANT: For best result set number of photos to 8.', 'zlotus'),
	));
	register_sidebar(array(
		'name' => esc_html__('Widget Area under Featured Area', 'zlotus'),
		'id' => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Intended for newsletter widget or banner ads', 'zlotus'),
	));
	register_sidebar(array(
		'name' => esc_html__('Instagram Footer', 'zlotus'),
		'id' => 'sidebar-5',
		'before_widget' => '<div id="%1$s" class="instagram-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="instagram-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Use the "Instagram" widget here. IMPORTANT: For best result set number of photos to 8.', 'zlotus'),
	));
}

//////////////////////////////////////////////////////////////////
// Include files
//////////////////////////////////////////////////////////////////

// Theme Options
include( get_template_directory() . '/functions/custom_controller.php');
include( get_template_directory() . '/functions/customizer_settings.php');
include( get_template_directory() . '/functions/customizer_style.php');

// Widgets
include( get_template_directory() . '/inc/widgets/about_widget.php');
include( get_template_directory() . '/inc/widgets/social_widget.php');
include( get_template_directory() . '/inc/widgets/post_widget.php');
include( get_template_directory() . '/inc/widgets/facebook_widget.php');
include( get_template_directory() . '/inc/widgets/promo_widget.php');

// TGM
include( get_template_directory() . '/zlotus-tgm.php');

//////////////////////////////////////////////////////////////////
// COMMENTS LAYOUT
//////////////////////////////////////////////////////////////////
function zlotus_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		
		<div class="thecomment">
					
			<div class="author-img">
				<?php echo get_avatar($comment,$args['avatar_size']); ?>
			</div>
			
			<div class="comment-text">
				<span class="reply">
					<?php comment_reply_link(array_merge( $args, array('reply_text' => esc_html__('Reply', 'zlotus'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
					<?php edit_comment_link(esc_html__('Edit', 'zlotus')); ?>
				</span>
				<h6 class="author"><?php echo get_comment_author_link(); ?></h6>
				<span class="date"><?php printf(esc_html__('%1$s at %2$s', 'zlotus'), get_comment_date(),  get_comment_time()) ?></span>
				<?php if ($comment->comment_approved == '0') : ?>
					<em><i class="icon-info-sign"></i> <?php esc_html_e('Comment awaiting approval', 'zlotus'); ?></em>
					<br />
				<?php endif; ?>
				<?php comment_text(); ?>
			</div>
					
		</div>
		
		
	</li>

	<?php 
}

//////////////////////////////////////////////////////////////////
// PAGINATION
//////////////////////////////////////////////////////////////////
function zlotus_pagination() {
	
	?>
	<div class="sp-col-12">
		<div class="zlotus-pagination">
			
			<div class="older"><?php next_posts_link(wp_kses( __( 'Older Posts', 'zlotus' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>
			<div class="newer"><?php previous_posts_link(wp_kses( __( 'Newer Posts', 'zlotus' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>
			
		</div>
	</div>
					
	<?php
	
}

//////////////////////////////////////////////////////////////////
// THE EXCERPT
//////////////////////////////////////////////////////////////////
function zlotus_custom_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'zlotus_custom_excerpt_length', 999 );

function zlotus_string_limit_words($string, $word_limit)
{
	$words = explode(' ', $string, ($word_limit + 1));
	
	if(count($words) > $word_limit) {
		array_pop($words);
	}
	
	return implode(' ', $words);
}

//////////////////////////////////////////////////////////////////
// Get social icons
//////////////////////////////////////////////////////////////////

function zlotus_get_social_icons() { ?>
	<?php if(get_theme_mod('zlotus_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('zlotus_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('zlotus_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('zlotus_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('zlotus_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('zlotus_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('zlotus_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('zlotus_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('zlotus_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('zlotus_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('zlotus_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('zlotus_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('zlotus_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_snapchat')) : ?><a href="http://snapchat.com/add/<?php echo esc_html(get_theme_mod('zlotus_snapchat')); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i></a><?php endif; ?>
	<?php if(get_theme_mod('zlotus_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('zlotus_rss')); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
<?php }

//////////////////////////////////////////////////////////////////
// TWITTER AMPERSAND ENTITY DECODE
//////////////////////////////////////////////////////////////////
function zlotus_social_title( $title ) {
    $title = html_entity_decode( $title );
    $title = urlencode( $title );
    return $title;
}

//////////////////////////////////////////////////////////////////
// WooCommerce functions
//////////////////////////////////////////////////////////////////

// Make sure WooCommerce is active
if ( class_exists( 'WooCommerce' ) ) {
	
	// Create WooCommerce sidebar-1
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('WooCommerce Sidebar', 'zlotus'),
			'id' => 'sidebar-3',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
			'description' => esc_html__('Widgets here will appear on your WooCommerce shop and product pages.', 'zlotus'),
		));
	}
	
	// Change number or products per row to 3
	add_filter('loop_shop_columns', 'loop_columns');
	if (!function_exists('loop_columns')) {
		function loop_columns() {
			return 3; // 3 products per row
		}
	}
	
	// Display 9 products per page.
	if(get_theme_mod('zlotus_woo_per_page')) :
		$sp_products_per_page = get_theme_mod('zlotus_woo_per_page');
	else :
		$sp_products_per_page = 9;
	endif;

	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return '.$sp_products_per_page.';' ), 20 );
	
	// Remove rating from shop page
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
	
	// Set related products to 3
	function woo_related_products_limit() {
	  global $product;
		
		$args['posts_per_page'] = 3;
		return $args;
	}
	add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
	  function jk_related_products_args( $args ) {
		$args['posts_per_page'] = 3; // 3 related products
		$args['columns'] = 3; // arranged in 3 columns
		return $args;
	}
	
	// Set upsell items to 3 columns
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );
	if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
		function woocommerce_output_upsells() {
			woocommerce_upsell_display( 3,3 ); // Display 3 products in rows of 3
		}
	}
	
	// Function for WooCommerce cart in top bar
	function my_header_add_to_cart_fragment( $fragments ) {
	 
		ob_start();
		$count = WC()->cart->cart_contents_count;
		?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'zlotus' ); ?>"><?php if ( $count > 0 ) echo '(' . $count . ')'; ?></a><?php
	 
		$fragments['a.cart-contents'] = ob_get_clean();
		 
		return $fragments;
	}

}