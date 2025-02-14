<?php
/**
 * The template for displaying archive pages
 * @subpackage Jobstride Resume
 * @since 1.0
 * @version 0.1
 */

get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>
	<?php endif; ?>

	<div class="content-area">
		<main id="skip-content" class="site-main" role="main">
			<?php
		    $luzuk_jobstride_resume_archive_page_sidebar = get_theme_mod('luzuk_jobstride_resume_archive_page_sidebar','One Column');
		    if($luzuk_jobstride_resume_archive_page_sidebar == 'Left Sidebar'){ ?>
		    	<div class="row">
		        	<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			        <div class="content_area col-lg-8 col-md-8">
				    	<section id="post_section">
				    		<div class="row">
								<?php
								if ( have_posts() ) : ?>
									<?php
									while ( have_posts() ) : the_post(); ?>

										<div class="col-lg-6 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif; 
								?>
							</div>
							<div class="navigation">
				                <?php
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'jobstride-resume' ),
				                        'next_text'          => __( 'Next page', 'jobstride-resume' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'jobstride-resume' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div class="clearfix"></div>
				</div>			
			<?php }else if($luzuk_jobstride_resume_archive_page_sidebar == 'Right Sidebar'){ ?>
				<div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<div class="row">
								<?php
								if ( have_posts() ) : ?>
									<?php
									while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-6 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif; 
								?>
							</div>
							<div class="navigation">
				                <?php
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'jobstride-resume' ),
				                        'next_text'          => __( 'Next page', 'jobstride-resume' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'jobstride-resume' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>
			<?php }else if($luzuk_jobstride_resume_archive_page_sidebar == 'One Column'){ ?>
					<div class="content_area">
						<section id="post_section">
							<div class="row">
								<?php
								if ( have_posts() ) : ?>
									<?php
									while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-4 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif; 
								?>
							</div>
							<div class="navigation">
				                <?php
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'jobstride-resume' ),
				                        'next_text'          => __( 'Next page', 'jobstride-resume' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'jobstride-resume' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
			<?php }else if($luzuk_jobstride_resume_archive_page_sidebar == 'Grid Layout'){ ?>
		    	<div class="content_area">
					<section id="post_section" >
						<div class="row">
							<?php
							if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/grid-layout' );

								endwhile;

								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif; 
							?>
						</div>
						<div class="navigation">
			                <?php
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'jobstride-resume' ),
			                        'next_text'          => __( 'Next page', 'jobstride-resume' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'jobstride-resume' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
			<?php } else { ?>
				<div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<div class="row">
								<?php
								if ( have_posts() ) : ?>
									<?php
									while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-6 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif; 
								?>
							</div>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'jobstride-resume' ),
				                        'next_text'          => __( 'Next page', 'jobstride-resume' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'jobstride-resume' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>
			<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();
