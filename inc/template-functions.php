<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package PrimeTour
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function primetour_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'primetour_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function primetour_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'primetour_pingback_header' );

function handle_ajax_form_submit() {
	global $redux;
	$data = $_REQUEST['data'];
	$project_name = trim(get_bloginfo( 'name' ));
	$recipient_email = trim($redux['section-contact-form-email']);
	$form_subject = trim($redux['section-contact-form-subject']);

	if ( !$data && $project_name && $recipient_email && $form_subject ) {
		echo '';
		wp_die();
	}

	$message = '';
	$c = true;
	foreach ( $data as $key => $value ) {
		if ( $value != "" ) {
			$message .= "
				" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
					<th style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></th>
					<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
				</tr>
				";
		}
	}

	$message = "<table style='width: 100%;'>$message</table>";

	function adopt($text) {
		return '=?UTF-8?B?'. Base64_encode($text) . '?=';
	}

	$headers = array(
		"MIME-Version: 1.0\n",
		"Content-Type: text/html; charset=utf-8\n",
		'From: ' . adopt( $project_name ) . " <$recipient_email>\n",
		"Reply-To: $recipient_email\n",
	);

	echo wp_mail( $recipient_email, adopt( $form_subject ), $message, $headers );
	wp_die();
}
add_action( 'wp_ajax_send-mail', 'handle_ajax_form_submit' );
add_action( 'wp_ajax_nopriv_send-mail', 'handle_ajax_form_submit' );

function nav_menu_css_class( $classes, $item, $args, $depth ) {
	if ( $depth == 0 ) {
		$classes[] = 'nav-item';
		if (in_array('menu-item-has-children', $classes)) {
			$classes[] = 'dropdown';
		}
	} else {
		$classes[] = 'dropdown-item';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'nav_menu_css_class', 10, 4 );

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'nav-item';

		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		if ($depth == 0) {
			$output .= $indent . '<li' . $id . $class_names . '>';
		}

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
			$atts['rel'] = 'noopener noreferrer';
		} else {
			$atts['rel'] = $item->xfn;
		}
		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
		$atts['aria-current'] = $item->current ? 'page' : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$link_class = $depth ? 'dropdown-item' : 'nav-link';
		if ( in_array('menu-item-has-children', $classes) ) {
			$link_class .= ' dropdown-toggle';
		}

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . ' class="' . $link_class . '">';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		if ($depth == 0) {
			$output .= "</li>{$n}";
		}
	}

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'sub-menu', 'dropdown-menu' );

		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<div$class_names>{$n}";
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "$indent</div>{$n}";
	}
}