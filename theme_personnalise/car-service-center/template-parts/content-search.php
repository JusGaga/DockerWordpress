<?php
/**
 * Section of the template used to display results on search pages
 * 
 * @package Car Service Center
 */

?>
<div class="col-md-6 col-lg-4 grid-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
	        <figure class="featured-image">
	            <a href="<?php the_permalink(); ?>">
	                <?php car_service_center_image_size( 'car-service-center-420-300' ) ?>
	            </a>
	        </figure>
	    <?php endif; ?>
	    <div class="entry-content">
	    	<header class="entry-header">
	    		<?php
	    		car_service_center_entry_header();
	    		the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); 
	    		?>
	    	</header>
	    	<?php if ( 'post' === get_post_type() ) : ?>
	    		<div class="entry-meta">
	    			<?php car_service_center_entry_footer(); ?>
	    		</div>
	    	<?php endif; ?>

			<div class="entry-summary">
				<?php car_service_center_excerpt_length( 15, true ); ?>
			</div>
		</div>
	</article>
</div>