<?php
/**
 * Template Name: About us page
 */
global $redux;
get_header();
set_query_var( 'background_image', $redux['page-about-header-image']['url'] );
get_template_part( 'template-parts/sections/breadcrumb-section' );
get_template_part( 'template-parts/sections/about-section' );
get_footer();