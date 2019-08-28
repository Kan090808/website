<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<?php if(!get_theme_mod('zlotus_responsive')) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php endif; ?>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="top-bar">
		
		<?php if(!get_theme_mod('zlotus_header_hide_social')) : ?>
		<div id="top-social" <?php if(get_theme_mod('zlotus_header_hide_search')) : ?>class="nosearch"<?php endif; ?>>
			<?php zlotus_get_social_icons(); ?>
		</div>
		<?php endif; ?>
		
		<nav id="navigation">
		
			<div id="nav-wrapper">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
			</div>
			
			<div id="slick-mobile-menu"></div>
		
		</nav>
		
		<div id="top-bar-right">
		
			<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
			<?php if(!get_theme_mod('zlotus_woo_cart_icon')) : ?>
			<div id="sp-shopping-cart">
			<?php $count = WC()->cart->cart_contents_count; ?>
				<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'zlotus' ); ?>"><?php if ( $count >= 0 ) echo '<span class="sp-count">' . $count . '</span>'; ?></a>
			</div>
			<?php endif; ?>
			<?php endif; ?>
			
			<?php if(!get_theme_mod('zlotus_header_hide_search')) : ?>
			<div class="top-search desktop-search">
				<?php get_search_form(); ?>
			</div>
			<div class="top-search mobile-search">
				<a href="#"><i class="fa fa-search"></i></a>
			</div>
			<div id="show-search">
				<?php get_search_form(); ?>
				<a href="#" class="close-search"><i class="fa fa-close"></i></a>
			</div>
			<?php endif; ?>
			
			<div id="mobile-social">
			<?php if(!get_theme_mod('zlotus_header_hide_social')) : ?>
				<?php zlotus_get_social_icons(); ?>
			<?php endif; ?>
			</div>
		
		</div>
		
	</div>
	
	<header id="header" class="<?php if(!get_theme_mod('zlotus_featured_slider')) : ?>no-slider<?php endif; ?><?php if(is_page_template('page-fullwidth.php') && get_theme_mod('zlotus_page_title') && has_post_thumbnail()) : ?> no-page-title<?php endif; ?>">
		
		<div id="logo">
			<?php if(!get_theme_mod('zlotus_logo')) : ?>
						
				<?php if(is_front_page()) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						<?php
						endif; ?>
				<?php else : ?>
					<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
					<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						<?php
						endif; ?>
				<?php endif; ?>
				
			<?php else : ?>
				
				<?php if(is_front_page()) : ?>
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('zlotus_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
				<?php else : ?>
					<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('zlotus_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
				<?php endif; ?>
				
			<?php endif; ?>
		</div>
	
	</header>