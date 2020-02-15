<?php

add_action( 'cmb2_admin_init', 'cmb2_posts_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_posts_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$service = new_cmb2_box( array(
		'id'            => 'service-metabox',
		'title'         => __( 'Additional data', 'cmb2' ),
		'object_types'  => array( 'services' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$service->add_field( array(
		'name'    => 'Cover photo',
		'id'      => 'cover-photo',
		'type'    => 'file',
		'query_args' => array(
			 'type' => array(
			 	'image/gif',
			 	'image/jpeg',
			 	'image/png',
			 ),
		),
		'preview_size' => 'medium',
	) );

	$service->add_field( array(
		'name'    => 'Location',
		'id'      => 'location',
		'type'    => 'text',
	) );
}
