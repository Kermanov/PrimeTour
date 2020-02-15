<?php
/**
 * The template for displaying all service posts
 *
 * @package PrimeTour
 * @since 1.0.0
 */
global $redux;
get_header();
$cover_photo = get_post_meta( get_the_ID(), 'cover-photo', true);
set_query_var( 'background_image', $cover_photo );
get_template_part( 'template-parts/sections/breadcrumb-section' );
get_template_part( 'template-parts/sections/single-blog-section' );
get_footer();
