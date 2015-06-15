<?php
	
//ADD HOMEPAGE CONTENT
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'theme_homepage_content');
function theme_homepage_content() {
	?>
	<!-- ******** PORTFOLIO ******** -->
	<section class="portfolio">
		
	<h2 class="subhead">recent work</h2>		

		<!-- begin loop -->
		<?php
			
			// The Query
			$args = array(
				'category_name' => 'work',
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$blog_query = new WP_Query( $args );

			if ( $blog_query->have_posts() ) :
			
			while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

		
		<div class="featured-item">
			<div class="wrap">
				<div class="featured-excerpt">
					<h3><a href="<?php echo get_post_meta( get_the_ID(), 'work-link', true ); ?>" target="_blank"><?php echo get_the_title(); ?></a></h3>
					<p><?php the_content(); ?></p>
<!-- 					<a class="button" href="#">Visit the site</a> -->
				</div>
				<div class="featured-image">
					<!-- get full-sized featured image and link to the media file -->
					<?php if ( has_post_thumbnail() ) {
								$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
								echo '<a href="' . $full_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
								the_post_thumbnail( 'full' );
								echo '</a>';
							} ?>
				</div>
			</div>
		</div>
				
		<!-- end of loop -->
		<?php endwhile; 
			  endif; ?>
		
	</section>		

	<!-- ******** BLOG ******** -->
	<section class="blog">
		
		<h2 class="subhead">recent posts</h2>
	
		<?php
			
			// The Query
			wp_reset_query();
			$query = new WP_Query( array( 'category_name' => 'blog') );
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
			<article>
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<div class="entry-meta">
							<p>Posted on <?php the_date(); ?></p>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->
					
					<?php the_excerpt(); ?>
					
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="button">Read on...</a>
			</article>

		<!-- end The Query -->
		<?php endwhile; 
			  endif; ?>
			
	</section>
	<?php
}
	
	
genesis();