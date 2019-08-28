<?php
	/*
		Get post layout
	*/
?>
	
	<?php 
	
		$zlotus_get_template = get_page_template_slug( $post->ID );

		if($zlotus_get_template == 'single-sidebar.php') {
			get_template_part('single', 'sidebar');
		} elseif($zlotus_get_template == 'single-fullwidth.php') {
			get_template_part('single', 'fullwidth');
		} else {
			$zlotus_default_template = get_theme_mod('zlotus_post_layout');
			if($zlotus_default_template == 'post_fullwidth') {
				get_template_part('single', 'fullwidth');
			} elseif($zlotus_default_template == 'post_sidebar') {
				get_template_part('single', 'sidebar');
			} else {
				get_template_part('single', 'sidebar');
			}
		}
		
	?>