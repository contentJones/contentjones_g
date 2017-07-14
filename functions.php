<?php

// ADD GENESIS HTML5 MARKUP STRUCTURE
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// ENQUEUE SCRIPTS AND STYLES
function contentjones_g_scripts() {
	//load Google fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Fredoka+One|Lato:300,400i', array(), '1.1', 'all');

	//load main.js and jQuery
	wp_enqueue_script( 'main',  get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );


	if ( is_front_page() ) {
		//load bxslider script + css
		wp_enqueue_script( 'bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true );
		wp_enqueue_style( 'bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css', array(), '4.2.12', 'all');
		}

	
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

//Change search placeholder

function theme_search_button_text( $text ) {
return ( 'Search...');
}
add_filter( 'genesis_search_text', 'theme_search_button_text' );

//Display a custom favicon
add_filter( 'genesis_pre_load_favicon', 'theme_favicon_filter' );
function theme_favicon_filter( $favicon_url ) {
	return get_stylesheet_directory_uri() .'/favicon.png';
}