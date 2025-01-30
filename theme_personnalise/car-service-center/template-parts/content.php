<?php
/**
 * Section of the template used to display posts
 *
 * @package Car Service Center
 */
?>

<?php
	$car_service_center_stickyClass = "col-12 p-0";
	$car_service_center_layout_class = '';
	if( get_theme_mod( 'sidebar_settings', 'right' ) == 'right' ) {
		if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
			$car_service_center_stickyClass = "col-sm-6 grid-post";
			if( !is_active_sidebar( 'right-sidebar') ){
				$car_service_center_stickyClass = "col-sm-6 col-lg-4 grid-post";
			}
		}
	}elseif( get_theme_mod( 'sidebar_settings', 'right' ) == 'left' ) {
		if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
			$car_service_center_stickyClass = "col-sm-6 grid-post";
			if( !is_active_sidebar( 'left-sidebar') ){
				$car_service_center_stickyClass = "col-sm-6 col-lg-4 grid-post";
			}
		}
	}elseif( get_theme_mod( 'sidebar_settings', 'right' ) == 'no-sidebar' ) {
		if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
			$car_service_center_stickyClass = "col-sm-6 col-lg-4 grid-post";
		}
	}elseif( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ) {
		if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
			$car_service_center_stickyClass = "col-sm-6 col-lg-6 grid-post";
			if( !is_active_sidebar( 'left-sidebar') && !is_active_sidebar( 'right-sidebar') ){
				$car_service_center_stickyClass = "col-sm-6 col-lg-4 grid-post";
			}
		}
	}
	if( get_theme_mod( 'disable_sidebar_blog_page', false ) && get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
		$car_service_center_stickyClass = "col-sm-6 col-lg-4 grid-post";
	}

	if( !is_sticky() && get_theme_mod( 'archive_post_layout', 'list' ) == 'list' ){
		$car_service_center_layout_class = 'list-post';
	}elseif( !is_sticky() && get_theme_mod( 'archive_post_layout', 'list' ) == 'single' ){
		$car_service_center_layout_class = 'single-post';
	}elseif( is_archive() && is_sticky() && get_theme_mod( 'archive_post_layout', 'list' ) == 'list' ){
		$car_service_center_layout_class = 'list-post';
	}elseif( is_archive() && is_sticky() && get_theme_mod( 'archive_post_layout', 'list' ) == 'single' ){
		$car_service_center_layout_class = 'single-post';
	}

	$class = '';
	if(!has_post_thumbnail()){
		$class = 'no-thumbnail';
	}

?>
<div class="<?php echo esc_attr( $car_service_center_stickyClass );?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class( $class . ' ' . $car_service_center_layout_class ) ?> >
		<?php 
		
		if ( has_post_thumbnail() ) : ?>
	        <figure class="featured-image">
	            <a href="<?php the_permalink(); ?>">
	                <?php
	                $car_service_center_grid_list_size = 'car-service-center-420-300';
	                $car_service_center_single_size 	= 'car-service-center-1370-550';
	                $car_service_center_render_post_image_size = get_theme_mod( 'car_service_center_render_post_image_size', '' );
	                if ( !empty( $car_service_center_render_post_image_size ) ){
	                	$car_service_center_grid_list_size = $car_service_center_render_post_image_size;
	                	$car_service_center_single_size 	= $car_service_center_render_post_image_size;
	                }
	                if( get_theme_mod( 'sidebar_settings', 'right' ) == 'right' ) {
	                	if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' || get_theme_mod( 'archive_post_layout', 'list' ) == 'list' ){
	                		car_service_center_image_size( $car_service_center_grid_list_size );
	                	}elseif( get_theme_mod( 'archive_post_layout', 'list' ) == 'single' ){
	                		car_service_center_image_size( $car_service_center_single_size );
	                	}
	                }elseif( get_theme_mod( 'sidebar_settings', 'right' ) == 'left' ) {
	                	if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' || get_theme_mod( 'archive_post_layout', 'list' ) == 'list' ){
	                		car_service_center_image_size( $car_service_center_grid_list_size );
	                	}elseif( get_theme_mod( 'archive_post_layout', 'list' ) == 'single' ){
	                		car_service_center_image_size( $car_service_center_single_size );
	                	}
	                }elseif( get_theme_mod( 'sidebar_settings', 'right' ) == 'no-sidebar' ) {
	                	if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' || get_theme_mod( 'archive_post_layout', 'list' ) == 'list' ){
	                		car_service_center_image_size( $car_service_center_grid_list_size );
	                	}elseif( get_theme_mod( 'archive_post_layout', 'list' ) == 'single' ){
	                		car_service_center_image_size( $car_service_center_single_size );
	                	}
	                }elseif( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ) {
	                	if ( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' || get_theme_mod( 'archive_post_layout', 'list' ) == 'list' ){
	                		car_service_center_image_size( $car_service_center_grid_list_size );
	                	}elseif( get_theme_mod( 'archive_post_layout', 'list' ) == 'single' ){
	                		car_service_center_image_size( $car_service_center_single_size );
	                	}
	                }
	                ?>
	            </a>
	        </figure>
		<?php
	    endif;
		?>
	    <div class="entry-content">
	    	<header class="entry-header">
				<?php 
					if( !get_theme_mod( 'hide_category', false ) ){
						car_service_center_entry_header();
					}
					if( !get_theme_mod( 'hide_post_title', false ) ){
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					}
				?>

			</header>
			<div class="entry-meta">
	           <?php car_service_center_entry_footer(); ?>
	        </div>
			
			<?php if ( !get_theme_mod( 'hide_blog_page_excerpt', false ) || !get_theme_mod( 'hide_post_button', true ) ){ ?>
		        <div class="entry-text">
					<?php
						if ( !get_theme_mod( 'hide_blog_page_excerpt', false ) ){
							$excerpt_length = get_theme_mod( 'post_excerpt_length', 15 );
							car_service_center_excerpt_length( $excerpt_length , true );
						}
					?>
					<?php 
						if( !get_theme_mod( 'hide_post_button', true ) ){
							$car_service_center_post_btn_defaults = array(
								array(
									'blog_btn_type' 		=> 'button-text',
									'blog_btn_bg_color'		=> '#b91538',
									'blog_btn_border_color'	=> '#1a1a1a',
									'blog_btn_text_color'	=> '#1a1a1a',
									'blog_btn_hover_color'	=> '#b91538',
									'blog_btn_text' 		=> '',
									'blog_btn_radius'		=> 0,
								),
							);
							$car_service_center_post_button = get_theme_mod( 'blog_page_button_repeater', $car_service_center_post_btn_defaults );
							if( !empty( $car_service_center_post_button ) && is_array( $car_service_center_post_button ) ){ ?>
								<div class="button-container">
									<?php
									  	$count = 0.2;
					            		foreach( $car_service_center_post_button as $value ){
											if( !empty( $value['blog_btn_text'] ) ){ ?>
												<a href="<?php the_permalink(); ?>" class="<?php echo esc_attr( $value['blog_btn_type'] ); ?>">
													<?php 
														echo esc_html( $value['blog_btn_text'] );
													?>
												</a>
												<?php
								                $count = $count + 0.2;
								            }
							        	}
							        ?>
							    </div>
							    <?php
					        }
						}
					?>	
				</div>
			<?php } ?>
		</div>
	</article>
</div>