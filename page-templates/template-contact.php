<?php
/**
 * Template Name: Contact us page
 */
global $redux;
get_header();
set_query_var( 'background_image', $redux['page-contact-header-image']['url'] );
get_template_part( 'template-parts/sections/breadcrumb-section' );
get_template_part( 'template-parts/sections/contact-section' );
get_footer();