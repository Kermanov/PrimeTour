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
                <div class="row">
<!--                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content">
                            <span>Top destinations</span>
                            <a href="#">Asia</a>
                            <a href="#">Europe</a>
                            <a href="#">America</a>
                        </div>
                    </div>-->
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">
                            <a href="<?php //echo $redux['facebook-link']; ?>"><i class="flaticon-facebook"></i></a>
<!--                            <a href="--><?php //echo $redux['-link']; ?><!--"><i class="flaticon-twitter"></i></a>-->
<!--                            <a href="--><?php //echo $redux['-link']; ?><!--"><i class="flaticon-skype"></i></a>-->
                            <a href="<?php //echo $redux['instagram-link']; ?>"><i class="flaticon-instagram"></i></a>
                            <span><i class="flaticon-phone-call"></i><?php //echo $redux['phone-number']; ?></a></span>
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

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                 id="navbarSupportedContent">
<!--                                <ul class="navbar-nav">-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="index.html">Home</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="about.html">About</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="packages.html">packages</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item dropdown">-->
<!--                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"-->
<!--                                           role="button" data-toggle="dropdown" aria-haspopup="true"-->
<!--                                           aria-expanded="false">-->
<!--                                            Blog-->
<!--                                        </a>-->
<!--                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                                            <a class="dropdown-item" href="blog.html">Blog</a>-->
<!--                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item dropdown">-->
<!--                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"-->
<!--                                           role="button" data-toggle="dropdown" aria-haspopup="true"-->
<!--                                           aria-expanded="false">-->
<!--                                            pages-->
<!--                                        </a>-->
<!--                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">-->
<!--                                            <a class="dropdown-item" href="top_place.html">top place</a>-->
<!--                                            <a class="dropdown-item" href="tour_details.html">tour details</a>-->
<!--                                            <a class="dropdown-item" href="elements.html">Elements</a>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="contact.html">Contact</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
	                            <?php
	                            wp_nav_menu( array(
		                            'theme_location' => 'menu-1',
		                            'menu_id'        => 'primary-menu',
		                            'menu_class'     => 'navbar-nav',
	                            ) );
	                            ?>
                            </div>
<!--                            <a href="#" class="btn_1 d-none d-lg-block">book now</a>-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">
