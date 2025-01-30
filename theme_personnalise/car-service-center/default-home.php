<?php
/**
 * Template Name: Default Home Page
 */

get_header();
?>

<main id="primary">
    <section id="main-banner-wrap">
        <div id="banner-area">
            <div class="owl-carousel owl-theme">
                <?php
                    $car_service_center_banner = get_theme_mod( 'car_service_center_slider');
                    for ( $i = 1; $i <= $car_service_center_banner; $i++ ){ ?>
                    <div class="item">
                        <div class="main-banner-inner-box">
                            <?php
                            $car_service_center_banner_image = get_theme_mod( 'car_service_center_banner_image'.$i, '' );
                            if ( ! empty( $car_service_center_banner_image ) ) { ?>
                                <img src="<?php echo esc_url( $car_service_center_banner_image ); ?>">
                            <?php } ?>
                        </div>
                        <div class="main-banner-content-box">
                            <?php
                                $car_service_center_banner_short_heading = get_theme_mod( 'car_service_center_banner_short_heading'.$i, '' );
                                if ( ! empty( $car_service_center_banner_short_heading ) ) { ?>
                                <h6><?php echo esc_html( $car_service_center_banner_short_heading ); ?></h6>
                            <?php } ?>
                            <?php
                                $car_service_center_banner_heading = get_theme_mod( 'car_service_center_banner_heading'.$i, '' );
                                if ( ! empty( $car_service_center_banner_heading ) ) { ?>
                                <h3><?php echo esc_html( $car_service_center_banner_heading ); ?></h3>
                            <?php } ?>
                            <?php
                                $car_service_center_banner_btn = get_theme_mod( 'car_service_center_banner_btn'.$i, '' );
                                $car_service_center_banner_button_link = get_theme_mod( 'car_service_center_banner_button_link'.$i, '' );
                                if ( ! empty( $car_service_center_banner_btn ) ) { ?>
                                <a href="<?php echo esc_url( $car_service_center_banner_button_link ); ?>"><?php echo esc_html( $car_service_center_banner_btn ); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="team py-5">
        <div class="container">
            <?php
                $car_service_center_team_heading = get_theme_mod( 'car_service_center_team_heading', '' );                
                if ( ! empty( $car_service_center_team_heading ) ) { ?>
                <div class="main-heading mb-4">
                    <h3 class="mb-0"><?php echo esc_html( $car_service_center_team_heading ); ?></h3>
                    <hr>
                    <i class="fas fa-car"></i>
                </div>
            <?php } ?>
            <div class="row">
                <?php
                    $car_service_center_team = get_theme_mod( 'car_service_center_team');
                    for ( $i = 1; $i <= $car_service_center_team; $i++ ){ ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="team-inner-box mb-4">
                            <div class="team-image">
                                <?php
                                    $car_service_center_team_image = get_theme_mod( 'car_service_center_team_image'.$i, '' );
                                    if ( ! empty( $car_service_center_team_image ) ) { ?>
                                    <img src="<?php echo esc_url( $car_service_center_team_image ); ?>">
                                <?php } ?>
                                <div class="team-date">
                                   <?php $car_service_center_team_designation = get_theme_mod( 'car_service_center_team_designation'.$i, '' );
                                        if ( ! empty( $car_service_center_team_designation ) ) { ?>
                                        <h5 class="mb-0"><?php echo esc_html( $car_service_center_team_designation ); ?></h5>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php $car_service_center_team_title = get_theme_mod( 'car_service_center_team_title'.$i, '' );
                                if ( ! empty( $car_service_center_team_title ) ) { ?>
                                <h4><?php echo esc_html( $car_service_center_team_title ); ?></h4>
                            <?php } ?>
                            <div class="team-social">
                                <?php
                                    $car_service_center_team_facebook_url = get_theme_mod( 'car_service_center_team_facebook_url'.$i, '' );
                                    if ( ! empty( $car_service_center_team_facebook_url ) ) { ?>
                                    <a href="<?php echo esc_url( $car_service_center_team_facebook_url ); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
                                <?php } ?>
                                <?php
                                    $car_service_center_team_twitter_url = get_theme_mod( 'car_service_center_team_twitter_url'.$i, '' );
                                    if ( ! empty( $car_service_center_team_twitter_url ) ) { ?>
                                    <a ref="<?php echo esc_url( $car_service_center_team_twitter_url ); ?>"><i class="fab fa-twitter mr-3"></i></a>
                                <?php } ?>
                                <?php
                                    $car_service_center_team_instagram_url = get_theme_mod( 'car_service_center_team_instagram_url'.$i, '' );
                                    if ( ! empty( $car_service_center_team_instagram_url ) ) { ?>
                                    <a href="<?php echo esc_url( $car_service_center_team_instagram_url ); ?>"><i class="fab fa-instagram mr-3"></i></a>
                                <?php } ?>
                                <?php
                                    $car_service_center_team_youtube_url = get_theme_mod( 'car_service_center_team_youtube_url'.$i, '' );
                                    if ( ! empty( $car_service_center_team_youtube_url ) ) { ?>
                                    <a href="<?php echo esc_url( $car_service_center_team_youtube_url ); ?>"><i class="fab fa-youtube mr-3"></i></a>
                                <?php } ?>
                                <?php
                                    $car_service_center_team_whatsapp_url = get_theme_mod( 'car_service_center_team_whatsapp_url'.$i, '' );
                                    if ( ! empty( $car_service_center_team_whatsapp_url ) ) { ?>
                                    <a href="<?php echo esc_url( $car_service_center_team_whatsapp_url ); ?>"><i class="fab fa-whatsapp"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
    </section>
</main>

<?php
get_footer();