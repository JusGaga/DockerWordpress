<?php
/**
 * Displays the menu icon and modal
 *
 * @package WordPress
 * @subpackage Jobstride_Resume
 * @since Jobstride Resume 1.0
 */

?>

<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

	<div class="menu-modal-inner modal-inner">

		<div class="menu-wrapper section-inner">

			<div class="menu-top">

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" data-set-focus=".menu-modal">
					<span class="toggle-text"><?php _e( 'Close Menu', 'jobstride-resume' ); ?></span>
					<i class="fa fa-times" aria-hidden="true"></i>
				</button><!-- .nav-toggle -->

				<?php

				$mobile_menu_location = '';

				// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order.
				if ( has_nav_menu( 'mobile' ) ) {
					$mobile_menu_location = 'mobile';
				} elseif ( has_nav_menu( 'primary' ) ) {
					$mobile_menu_location = 'primary';
				} elseif ( has_nav_menu( 'expanded' ) ) {
					$mobile_menu_location = 'expanded';
				}

				if ( has_nav_menu( 'expanded' ) ) {

					$expanded_nav_classes = '';

					if ( 'expanded' === $mobile_menu_location ) {
						$expanded_nav_classes .= ' mobile-menu';
					}

					?>

					<nav class="expanded-menu<?php echo esc_attr( $expanded_nav_classes ); ?>" aria-label="<?php echo esc_attr_x( 'Expanded', 'menu', 'jobstride-resume' ); ?>">

						<ul class="modal-menu reset-list-style">
							<?php
							if ( has_nav_menu( 'expanded' ) ) {
								wp_nav_menu(
									array(
										'container'      => '',
										'items_wrap'     => '%3$s',
										'show_toggles'   => true,
										'theme_location' => 'expanded',
									)
								);
							}
							?>
						</ul>

					</nav>

					<?php
				}

				if ( 'expanded' !== $mobile_menu_location ) {
					?>

					<nav class="mobile-menu" aria-label="<?php echo esc_attr_x( 'Mobile', 'menu', 'jobstride-resume' ); ?>">

						<ul class="modal-menu reset-list-style">

						<?php
						if ( $mobile_menu_location ) {

							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => $mobile_menu_location,
								)
							);

						} else {

							wp_list_pages(
								array(
									'match_menu_classes' => true,
									'show_toggles'       => true,
									'title_li'           => false,
									'walker'             => new Jobstride_Resume_Walker_Page(),
								)
							);

						}
						?>

						</ul>

					</nav>

					<?php
				}
				?>

			</div><!-- .menu-top -->

		</div><!-- .menu-wrapper -->

	</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->
