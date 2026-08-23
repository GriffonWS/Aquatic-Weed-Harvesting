<?php
/**
 * Aquatic Weed Harvesting — theme functions.
 *
 * @package aquatic-weed
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AWH_VERSION', '2.0.1' );

/* ============================================================== theme setup */

function awh_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'awh_setup' );

/* =================================================================== assets */

function awh_assets() {
	// Fonts first, so style.css can depend on them and load in the right order.
	wp_enqueue_style(
		'awh-fonts',
		'https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style( 'awh-style', get_stylesheet_uri(), array( 'awh-fonts' ), AWH_VERSION );

	wp_enqueue_script( 'awh-main', get_template_directory_uri() . '/main.js', array(), AWH_VERSION, true );

	// main.js falls back to its static-preview behaviour when this object is
	// absent, so the same file still works when opened as plain HTML.
	wp_localize_script(
		'awh-main',
		'AWH',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'awh_quote' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'awh_assets' );

/* ==================================================== image path convenience */

/**
 * URL for a file in the theme's /images directory.
 *
 * @param string $file Filename.
 * @return string
 */
function awh_img( $file ) {
	return esc_url( get_template_directory_uri() . '/images/' . ltrim( $file, '/' ) );
}

/* ==================================================================== title */

/**
 * Keep the hand-written front-page title.
 *
 * Priority 5 so a later SEO plugin (Yoast / Rank Math both run at 10) still
 * wins — once one is installed and configured, delete this filter.
 */
function awh_document_title( $title ) {
	if ( is_front_page() ) {
		return 'Aquatic Weed Harvesting LLC — Got Lake Weeds? | Hudson Valley, NY';
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'awh_document_title', 5 );

/* ============================================================= theme pages */

/**
 * The About and Resources templates render against real Pages, so create them
 * if they are not there. Without them the header menu points at a 404.
 *
 * page-about.php / page-resources.php are picked up automatically by the
 * template hierarchy once a page with the matching slug exists.
 */
function awh_create_pages() {
	$pages = array(
		'about'          => 'About',
		'services'       => 'Services',
		'why-mechanical' => 'Why mechanical',
		'how-it-works'   => 'How it works',
		'who-we-serve'   => 'Who we serve',
		'resources'      => 'Resources',
		'contact'        => 'Contact',
	);

	foreach ( $pages as $slug => $title ) {
		$existing = get_page_by_path( $slug );

		if ( $existing instanceof WP_Post ) {
			// There already, but a draft or in the trash renders as a 404.
			if ( 'publish' !== $existing->post_status ) {
				wp_update_post(
					array(
						'ID'          => $existing->ID,
						'post_status' => 'publish',
					)
				);
			}
			continue;
		}

		wp_insert_post(
			array(
				'post_title'     => $title,
				'post_name'      => $slug,
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'post_content'   => '',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			)
		);
	}

	// New page URLs will not resolve on pretty permalinks until this runs.
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'awh_create_pages' );

/**
 * after_switch_theme only fires on activation, so a theme updated in place
 * would never get its pages. Check once per version instead.
 */
function awh_maybe_create_pages() {
	if ( AWH_VERSION === get_option( 'awh_pages_created' ) ) {
		return;
	}

	awh_create_pages();
	update_option( 'awh_pages_created', AWH_VERSION );
}
add_action( 'admin_init', 'awh_maybe_create_pages' );

/* ============================================================== quote form  */

/**
 * Where quote requests are sent.
 *
 * Set the `awh_quote_email` option (or use the filter) to point this at the
 * client. Falls back to the site admin address so nothing is lost on the dev
 * site before that is configured.
 *
 * @return string
 */
function awh_quote_recipient() {
	$to = get_option( 'awh_quote_email' );
	if ( empty( $to ) || ! is_email( $to ) ) {
		$to = get_option( 'admin_email' );
	}
	return apply_filters( 'awh_quote_recipient', $to );
}

/**
 * Handle the estimate-request form.
 */
function awh_handle_quote() {
	if ( ! check_ajax_referer( 'awh_quote', 'nonce', false ) ) {
		wp_send_json_error( array( 'message' => 'Your session expired — please reload the page and try again.' ), 403 );
	}

	// Honeypot: real people never fill this in. Report success so bots stop.
	if ( ! empty( $_POST['awh_url'] ) ) {
		wp_send_json_success( array( 'message' => 'Thanks.' ) );
	}

	$name  = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$phone = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$water = isset( $_POST['water'] ) ? sanitize_text_field( wp_unslash( $_POST['water'] ) ) : '';
	$area  = isset( $_POST['area'] ) ? sanitize_text_field( wp_unslash( $_POST['area'] ) ) : '';
	$notes = isset( $_POST['notes'] ) ? sanitize_textarea_field( wp_unslash( $_POST['notes'] ) ) : '';

	$weeds = array();
	if ( ! empty( $_POST['weed'] ) ) {
		foreach ( (array) wp_unslash( $_POST['weed'] ) as $w ) {
			$weeds[] = sanitize_text_field( $w );
		}
	}

	if ( '' === $name || '' === $phone || ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'Please check your name, phone and email.' ), 400 );
	}

	$lines = array(
		'New estimate request from the website.',
		'',
		'Name:       ' . $name,
		'Phone:      ' . $phone,
		'Email:      ' . $email,
		'Lake/pond:  ' . ( '' !== $water ? $water : '—' ),
		'Rough area: ' . ( '' !== $area ? $area : '—' ),
		"What's growing: " . ( $weeds ? implode( ', ', $weeds ) : '—' ),
		'',
		'Notes:',
		'' !== $notes ? $notes : '—',
		'',
		'---',
		'Sent from ' . home_url( '/' ),
	);

	$sent = wp_mail(
		awh_quote_recipient(),
		sprintf( 'Website estimate request — %s', $name ),
		implode( "\n", $lines ),
		array(
			'Reply-To: ' . $name . ' <' . $email . '>',
		)
	);

	if ( ! $sent ) {
		wp_send_json_error(
			array( 'message' => 'We could not send that just now — please call (518) 441-7742.' ),
			500
		);
	}

	wp_send_json_success( array( 'message' => "Thanks — that's through. Jim will be in touch shortly." ) );
}
add_action( 'wp_ajax_awh_quote', 'awh_handle_quote' );
add_action( 'wp_ajax_nopriv_awh_quote', 'awh_handle_quote' );
