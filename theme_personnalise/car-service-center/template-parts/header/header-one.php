<div class="header-main-area">
	<div class="container">
		<div class="row m-0 header-row-area">
			<div class="col-lg-3 col-md-3 align-self-center">
				<?php get_template_part( 'template-parts/site', 'branding' ); ?>
			</div>
			<div class="col-lg-9 col-md-9 align-self-center p-0">
				<div class="top-header">
					<div class="row">
						<div class="col-lg-9 col-md-9">
							<div class="topbar-inner-box">
								<?php
					                $car_service_center_phone_number = get_theme_mod( 'car_service_center_phone_number', '' );
					                if ( ! empty( $car_service_center_phone_number ) ) { ?>
					                <p class="mb-0"><i class="fas fa-phone mr-2"></i><span class=" mr-2"><?php esc_html_e('Call Us Enquiry','car-service-center'); ?></span><?php echo esc_html( $car_service_center_phone_number ); ?></p>
					            <?php } ?>
					            <?php
					                $car_service_center_email_address = get_theme_mod( 'car_service_center_email_address', '' );
					                if ( ! empty( $car_service_center_email_address ) ) { ?>
					                <p class="mb-0"><i class="fas fa-envelope mr-2"></i> <span class=" mr-2"><?php esc_html_e('Mail Us Today','car-service-center'); ?></span><?php echo esc_html( $car_service_center_email_address ); ?></p>
					            <?php } ?>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 align-self-center">
							<div class="social-inner-box">
								<?php
					                $car_service_center_facebook_url = get_theme_mod( 'car_service_center_facebook_url', '' );
					                if ( ! empty( $car_service_center_facebook_url ) ) { ?>
					                <a href="<?php echo esc_url( $car_service_center_facebook_url ); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
					            <?php } ?>
					            <?php
					                $car_service_center_twitter_url = get_theme_mod( 'car_service_center_twitter_url', '' );
					                if ( ! empty( $car_service_center_twitter_url ) ) { ?>
					                <a ref="<?php echo esc_url( $car_service_center_twitter_url ); ?>"><i class="fab fa-twitter mr-3"></i></a>
					            <?php } ?>
					            <?php
					                $car_service_center_instagram_url = get_theme_mod( 'car_service_center_instagram_url', '' );
					                if ( ! empty( $car_service_center_instagram_url ) ) { ?>
					                <a href="<?php echo esc_url( $car_service_center_instagram_url ); ?>"><i class="fab fa-instagram mr-3"></i></a>
					            <?php } ?>
					            <?php
					                $car_service_center_youtube_url = get_theme_mod( 'car_service_center_youtube_url', '' );
					                if ( ! empty( $car_service_center_youtube_url ) ) { ?>
					                <a href="<?php echo esc_url( $car_service_center_youtube_url ); ?>"><i class="fab fa-youtube mr-3"></i></a>
					            <?php } ?>
					            <?php
					                $car_service_center_whatsapp_url = get_theme_mod( 'car_service_center_whatsapp_url', '' );
					                if ( ! empty( $car_service_center_whatsapp_url ) ) { ?>
					                <a href="<?php echo esc_url( $car_service_center_whatsapp_url ); ?>"><i class="fab fa-whatsapp"></i></a>
					            <?php } ?>
					        </div>
						</div>
					</div>
				</div>
				<header id="masthead" class="site-header header-one py-1">
					<div class="bottom-header header-image-wrap fixed-header">
						<div class="toggle-menu menu text-center text-md-left">
							<button onclick="car_service_center_mobile_menu_open()" class="toggle p-2"><i class="fa-solid fa-bars"></i></button>
						</div>
						<div id="responsive" class="nav side_nav">
							<nav id="top_menu" class="nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'car-service-center' ); ?>">
								<?php
								    wp_nav_menu( array( 
										'theme_location' => 'menu-1',
										'container_class' => 'navigation clearfix' ,
										'menu_class' => 'clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
								    ) ); 
								?>
								<a href="javascript:void(0)" class="closebtn menu" onclick="car_service_center_mobile_menu_close()"><i class="fa-solid fa-xmark"></i></a>
							</nav>
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
</div>