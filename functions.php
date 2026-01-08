<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Test
 */

if ( ! defined( 'TEST_VERSION' ) ) :
	define( 'TEST_VERSION', wp_get_theme()->get( 'Version' ) );
endif;

if ( ! defined( 'TEST_TEMP_DIR' ) ) :
	define( 'TEST_TEMP_DIR', untrailingslashit( get_template_directory() ) );
endif;

if ( ! defined( 'TEST_BUILD_URI' ) ) :
	define( 'TEST_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
endif;

if ( ! defined( 'TEST_BUILD_DIR' ) ) :
	define( 'TEST_BUILD_DIR', untrailingslashit( get_template_directory() ) . '/assets/build' );
endif;

require_once TEST_TEMP_DIR . '/vendor/autoload.php';

/**
 * Theme bootstrap instance.
 *
 * @since 1.0.0
 *
 * @return object Theme bootstrap instance.
 */
function test_instance() {
	return Test\Test::get_instance();
}

// Instantiate theme.
test_instance();
