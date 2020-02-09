<?php

add_action( 'cmb2_admin_init', 'cmb2_posts_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_posts_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$member = new_cmb2_box( array(
		'id'            => 'service-metabox',
		'title'         => __( 'Service meta', 'cmb2' ),
		'object_types'  => array( 'services', ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$member->add_field( array(
		'name'    => 'Excerpt',
		'desc'    => 'Recommended length ~60 words',
		'id'      => 'read_less',
		'type'    => 'wysiwyg',
		'options' => array(
			'wpautop' => false,
			'media_buttons' => false,
			'tabindex' => 0,
			'textarea_rows' => 6,
			'teeny' => false,
			'tinymce' => true,
			'quicktags' => true
		),
		'after' => 'cmb2_wysiwyg_word_counter',
	) );
}
