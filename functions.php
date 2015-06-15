<?php

// ADD GENESIS HTML5 MARKUP STRUCTURE
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// ENQUEUE SCRIPTS AND STYLES
function contentjones_g_scripts() {
	//load main.js and jQuery
	wp_enqueue_script( 'main',  get_stylesheet_directory_uri() . '/js/main.js', array('jquery-core'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'contentjones_g_scripts' );


//INSERT OFF-CANVAS DIVS IMMEDIATELY FOLLOWING BODY TAG
add_action( 'genesis_before', 'theme_offcanvas_begin', 10 );
function theme_offcanvas_begin() {
	?>
	
	<!-- ******** OFF CANVAS WIDGET AREA ******** -->
	<div id="site-wrapper">  
	<div id="site-canvas">
		
		<div id="off-canvas">
			
			<?php get_sidebar(); ?>
			
		</div>
	
	<?php
}

//CLOSE OFF-CANVAS DIVS
add_action( 'genesis_after', 'theme_offcanvas_close', 10 );
function theme_offcanvas_close() {
	?>
	  </div> <!-- #site-canvas -->
	</div> <!-- #site-wrapper -->
	<?php
}

