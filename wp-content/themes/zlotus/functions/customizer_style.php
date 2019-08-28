<?php
//////////////////////////////////////////////////////////////////
// Customizer - Add CSS
//////////////////////////////////////////////////////////////////
function zlotus_customizer_css() {
    ?>
    <style type="text/css">
	
		<?php if(get_theme_mod('zlotus_header_padding_top')) : ?>#header { padding-top:<?php echo get_theme_mod('zlotus_header_padding_top'); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod('zlotus_header_padding_bottom')) : ?>#header { padding-bottom:<?php echo get_theme_mod('zlotus_header_padding_bottom'); ?>px; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_topbar_border_color' )) : ?>#top-bar { border-top-color:<?php echo get_theme_mod( 'zlotus_topbar_border_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_topbar_bg_color' )) : ?>#top-bar, #show-search { background-color:<?php echo get_theme_mod( 'zlotus_topbar_bg_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_color' )) : ?>#nav-wrapper .menu li a { color:<?php echo get_theme_mod( 'zlotus_menu_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_color_hover' )) : ?>#nav-wrapper .menu li a:hover { color:<?php echo get_theme_mod( 'zlotus_menu_color_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_dropdown_arrow' )) : ?>#nav-wrapper .menu > li.menu-item-has-children > a:after { color:<?php echo get_theme_mod( 'zlotus_menu_dropdown_arrow' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_dropdown_bg' )) : ?>#nav-wrapper .menu .sub-menu, #nav-wrapper .menu .children { background-color:<?php echo get_theme_mod( 'zlotus_menu_dropdown_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_dropdown_border' )) : ?>#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { border-color:<?php echo get_theme_mod( 'zlotus_menu_dropdown_border' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_dropdown_text_color' )) : ?>#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { color:<?php echo get_theme_mod( 'zlotus_menu_dropdown_text_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_dropdown_text_hover_bg' )) : ?>#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover { background-color:<?php echo get_theme_mod( 'zlotus_menu_dropdown_text_hover_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_menu_dropdown_text_hover_color' )) : ?>#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover { color:<?php echo get_theme_mod( 'zlotus_menu_dropdown_text_hover_color' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_mobile_show' )) : ?>.slicknav_menu .slicknav_menutxt { color:<?php echo get_theme_mod( 'zlotus_mobile_show' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_mobile_show_hover' )) : ?>.slicknav_menu .slicknav_menutxt:hover { color:<?php echo get_theme_mod( 'zlotus_mobile_show_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_mobile_burger' )) : ?>.slicknav_menu .slicknav_icon-bar { background-color:<?php echo get_theme_mod( 'zlotus_mobile_burger' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_mobile_dropdown_bg' )) : ?>.slicknav_nav, .slicknav_nav ul { background-color:<?php echo get_theme_mod( 'zlotus_mobile_dropdown_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_mobile_dropdown_border' )) : ?>.slicknav_nav a, .slicknav_nav { border-color:<?php echo get_theme_mod( 'zlotus_mobile_dropdown_border' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_mobile_dropdown_text' )) : ?>.slicknav_nav a, .slicknav_nav .slicknav_arrow { color:<?php echo get_theme_mod( 'zlotus_mobile_dropdown_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_mobile_dropdown_text_hover' )) : ?>.slicknav_nav a:hover { color:<?php echo get_theme_mod( 'zlotus_mobile_dropdown_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_mobile_dropdown_text_bg_hover' )) : ?>.slicknav_nav a:hover, .slicknav_nav .slicknav_item:hover { background-color:<?php echo get_theme_mod( 'zlotus_mobile_dropdown_text_bg_hover' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_header_social_color' )) : ?>#top-social a, #mobile-social a { color:<?php echo get_theme_mod( 'zlotus_header_social_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_social_color_hover' )) : ?>#top-social a:hover, #mobile-social a:hover { color:<?php echo get_theme_mod( 'zlotus_header_social_color_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_search_icon' )) : ?>.top-search .search-button, .top-search.mobile-search i, #show-search .close-search { color:<?php echo get_theme_mod( 'zlotus_header_search_icon' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_search_icon_hover' )) : ?>.top-search .search-button:hover, .top-search.mobile-search i:hover, #show-search a.close-search:hover { color:<?php echo get_theme_mod( 'zlotus_header_search_icon_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_search_input_text' )) : ?>.top-search ::-webkit-input-placeholder, #show-search ::-webkit-input-placeholder, .top-search input, #show-search input { color:<?php echo get_theme_mod( 'zlotus_header_search_input_text' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_header_bg_color' )) : ?>#header { background-color:<?php echo get_theme_mod( 'zlotus_header_bg_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_bg_image' )) : ?>#header { background-image:url(<?php echo get_theme_mod( 'zlotus_header_bg_image' ); ?>); }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_bg_repeat' )) : ?>#header { background-repeat:<?php echo get_theme_mod( 'zlotus_header_bg_repeat' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_bg_size' )) : ?>#header { background-size:<?php echo get_theme_mod( 'zlotus_header_bg_size' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_bg_position' )) : ?>#header { background-position:<?php echo get_theme_mod( 'zlotus_header_bg_position' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_header_bg_attachment' )) : ?>#header { background-attachment:<?php echo get_theme_mod( 'zlotus_header_bg_attachment' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_featured_color_title' )) : ?>.feat-overlay h4 a { color:<?php echo get_theme_mod( 'zlotus_featured_color_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_featured_color_cat' )) : ?>.feat-item .cat a { color:<?php echo get_theme_mod( 'zlotus_featured_color_cat' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_post_color_title' )) : ?>.post-header h2 a, .post-header h1 { color:<?php echo get_theme_mod( 'zlotus_post_color_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_color_cat' )) : ?>.post-header .cat a { color:<?php echo get_theme_mod( 'zlotus_post_color_cat' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_color_date' )) : ?>.sp-date a { color:<?php echo get_theme_mod( 'zlotus_post_color_date' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_color_text' )) : ?>.post-entry p, .entry-content p, .post-entry, .post-entry ul li, .post-entry ol li { color:<?php echo get_theme_mod( 'zlotus_post_color_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_color_text_heading' )) : ?>.post-entry h1, .post-entry h2, .post-entry h3, .post-entry h4, .post-entry h5, .post-entry h6 { color:<?php echo get_theme_mod( 'zlotus_post_color_text_heading' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_color_more_text' )) : ?>.post-meta .read-more a { color:<?php echo get_theme_mod( 'zlotus_post_color_more_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_color_more_text_hover' )) : ?>.post-meta .read-more a:hover { color:<?php echo get_theme_mod( 'zlotus_post_color_more_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_tag_bg' )) : ?>.widget .tagcloud a, .post-tags a { background:<?php echo get_theme_mod( 'zlotus_post_tag_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_tag_text' )) : ?>.widget .tagcloud a, .post-tags a { color:<?php echo get_theme_mod( 'zlotus_post_tag_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_tag_bg_hover' )) : ?>.widget .tagcloud a:hover, .post-tags a:hover { background:<?php echo get_theme_mod( 'zlotus_post_tag_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_tag_text_hover' )) : ?>.widget .tagcloud a:hover, .post-tags a:hover { color:<?php echo get_theme_mod( 'zlotus_post_tag_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_share_color' )) : ?>.post-share a { color:<?php echo get_theme_mod( 'zlotus_post_share_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_share_color_hover' )) : ?>.post-share a:hover { color:<?php echo get_theme_mod( 'zlotus_post_share_color_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_comment_link_color' )) : ?>.meta-comment a { color:<?php echo get_theme_mod( 'zlotus_post_comment_link_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_comment_link_color_hover' )) : ?>.meta-comment a:hover { color:<?php echo get_theme_mod( 'zlotus_post_comment_link_color_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_author_color' )) : ?>.meta-author a { color:<?php echo get_theme_mod( 'zlotus_post_author_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_author_color_hover' )) : ?>.meta-author a:hover { color:<?php echo get_theme_mod( 'zlotus_post_author_color_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_quote_border' )) : ?>.post-entry blockquote, .entry-content blockquote { border-color:<?php echo get_theme_mod( 'zlotus_post_quote_border' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_quote_text' )) : ?>.post-entry blockquote p, .entry-content blockquote p { color:<?php echo get_theme_mod( 'zlotus_post_quote_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_comment_button_bg' )) : ?>#respond #submit { background:<?php echo get_theme_mod( 'zlotus_post_comment_button_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_comment_button_text' )) : ?>#respond #submit { color:<?php echo get_theme_mod( 'zlotus_post_comment_button_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_comment_button_bg_hover' )) : ?>#respond #submit:hover { background:<?php echo get_theme_mod( 'zlotus_post_comment_button_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_post_comment_button_text_hover' )) : ?>#respond #submit:hover { color:<?php echo get_theme_mod( 'zlotus_post_comment_button_text_hover' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_sidebar_color_title' )) : ?>.widget h4.widget-title { color:<?php echo get_theme_mod( 'zlotus_sidebar_color_title' ); ?>; }<?php endif; ?>		
		<?php if(get_theme_mod( 'zlotus_sidebar_social_color' )) : ?>.social-widget a { color:<?php echo get_theme_mod( 'zlotus_sidebar_social_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_sidebar_social_color_hover' )) : ?>.social-widget a:hover { color:<?php echo get_theme_mod( 'zlotus_sidebar_social_color_hover' ); ?>; }<?php endif; ?>

		<?php if(get_theme_mod( 'zlotus_sidebar_cate_hover_bg' )) : ?>.widget_categories li.cat-item:hover { background-color:<?php echo get_theme_mod( 'zlotus_sidebar_cate_hover_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_sidebar_cate_hover_color' )) : ?>.widget_categories li.cat-item:hover a { color:<?php echo get_theme_mod( 'zlotus_sidebar_cate_hover_color' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_footer_color_bg' )) : ?>#footer { background-color:<?php echo get_theme_mod( 'zlotus_footer_color_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_footer_color_text' )) : ?>.footer-text { color:<?php echo get_theme_mod( 'zlotus_footer_color_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_footer_border_color' )) : ?>#footer { border-bottom-color:<?php echo get_theme_mod( 'zlotus_footer_border_color' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_newsletter_bg' )) : ?>.subscribe-box { background:<?php echo get_theme_mod( 'zlotus_newsletter_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_title' )) : ?>.subscribe-box h4 { color:<?php echo get_theme_mod( 'zlotus_newsletter_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_text' )) : ?>.subscribe-box p { color:<?php echo get_theme_mod( 'zlotus_newsletter_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_input_bg' )) : ?>.subscribe-box input { background:<?php echo get_theme_mod( 'zlotus_newsletter_input_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_input_text' )) : ?>.subscribe-box ::-webkit-input-placeholder, .subscribe-box input { color:<?php echo get_theme_mod( 'zlotus_newsletter_input_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_submit_bg' )) : ?>.subscribe-box input[type=submit] { background:<?php echo get_theme_mod( 'zlotus_newsletter_submit_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_submit_text' )) : ?>.subscribe-box input[type=submit] { color:<?php echo get_theme_mod( 'zlotus_newsletter_submit_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_submit_bg_hover' )) : ?>.subscribe-box input[type=submit]:hover { background:<?php echo get_theme_mod( 'zlotus_newsletter_submit_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_newsletter_submit_text_hover' )) : ?>.subscribe-box input[type=submit]:hover { color:<?php echo get_theme_mod( 'zlotus_newsletter_submit_text_hover' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_misc_color_accent' )) : ?>a, .woocommerce .star-rating { color:<?php echo get_theme_mod( 'zlotus_misc_color_accent' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_pagination_bg' )) : ?>.zlotus-pagination a { background:<?php echo get_theme_mod( 'zlotus_misc_pagination_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_pagination_text' )) : ?>.zlotus-pagination a { color:<?php echo get_theme_mod( 'zlotus_misc_pagination_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_pagination_bg_hover' )) : ?>.zlotus-pagination a:hover { background:<?php echo get_theme_mod( 'zlotus_misc_pagination_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_pagination_text_hover' )) : ?>.zlotus-pagination a:hover { color:<?php echo get_theme_mod( 'zlotus_misc_pagination_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_archive_bg' )) : ?>.archive-box { background:<?php echo get_theme_mod( 'zlotus_misc_archive_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_archive_border' )) : ?>.archive-box { border-color:<?php echo get_theme_mod( 'zlotus_misc_archive_border' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_archive_title' )) : ?>.archive-box h1 { color:<?php echo get_theme_mod( 'zlotus_misc_archive_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'zlotus_misc_archive_subtitle' )) : ?>.archive-box span { color:<?php echo get_theme_mod( 'zlotus_misc_archive_subtitle' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'zlotus_custom_css' )) : ?>
		<?php echo get_theme_mod( 'zlotus_custom_css' ); ?>
		<?php endif; ?>
		
    </style>
    <?php
}
add_action( 'wp_head', 'zlotus_customizer_css' );

?>