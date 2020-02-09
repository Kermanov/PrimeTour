<?php

add_action( 'init', 'register_post_types' );
function register_post_types() {
	$text_domain = 'primetour';

	register_post_type( 'services', array(
		'label'         => null,
		'labels'        => array(
			'name'               => __( 'Services', $text_domain ),
			'singular_name'      => __( 'Service', $text_domain ),
			'add_new'            => __( 'Add service', $text_domain ),
			'add_new_item'       => __( 'Adding service', $text_domain ),
			'edit_item'          => __( 'Edit service', $text_domain ),
			'new_item'           => __( 'New service', $text_domain ),
			'view_item'          => __( 'View', $text_domain ),
			'search_items'       => __( 'Find service', $text_domain ),
			'not_found'          => __( 'Not found', $text_domain ),
			'not_found_in_trash' => __( 'Not found in trash', $text_domain ),
			'menu_name'          => __( 'Services', $text_domain ),
        ),
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => null,
        'menu_icon'     => 'dashicons-editor-kitchensink',
        'hierarchical'  => false,
        'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail' )
	) );
}
