<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PrimeTour
 */
global $redux;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'primetour' ); ?></a>

    <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row justify-content-between">
                    <!--<div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content">
                            <span>Top destinations</span>
                            <a href="#">Asia</a>
                            <a href="#">Europe</a>
                            <a href="#">America</a>
                        </div>
                    </div>-->
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">
	                        <?php
	                        $social_links = array(
		                        'facebook' => array(
			                        'link' => $redux['social-link-facebook'],
			                        'display' => $redux['social-link-facebook-display'],
		                        ),
		                        'twitter' => array(
			                        'link' => $redux['social-link-twitter'],
			                        'display' => $redux['social-link-twitter-display'],
		                        ),
		                        'instagram' => array(
			                        'link' => $redux['social-link-instagram'],
			                        'display' => $redux['social-link-instagram-display'],
		                        ),
	                        );
	                        foreach ( $social_links as $type => $social_link ) {
	                            if ($social_link['display']): ?>
                                    <a href="<?php echo $social_link['link']; ?>">
                                        <i class="flaticon-<?php echo $type; ?>"></i>
                                    </a>
                                <?php endif;
	                        }
	                        ?>
	                        <?php if ($phone = $redux['phone-number']): ?>
                                <span><i class="flaticon-phone-call"></i><?php echo $phone; ?></a></span>
	                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html"><?php the_custom_logo(); ?></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

	                        <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'menu-1',
                                'menu_id'         => 'primary-menu',
                                'menu_class'      => 'navbar-nav',
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse main-menu-item justify-content-center',
                                'container_id'    => 'navbarSupportedContent',
                                'walker'          => new Custom_Walker_Nav_Menu(),
                            ) );
	                        ?>
<!--                            <a href="#" class="btn_1 d-none d-lg-block">book now</a>-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">
