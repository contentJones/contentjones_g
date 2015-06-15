<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'radiate' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'search our blog', 'placeholder', 'radiate' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
</form>