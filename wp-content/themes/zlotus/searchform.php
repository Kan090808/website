<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" placeholder="<?php esc_html_e('Type to Search...', 'zlotus'); ?>" name="s" class="s" />
	<button type="submit" class="search-button">
		<i class="fa fa-search"></i>
	</button>
</form>