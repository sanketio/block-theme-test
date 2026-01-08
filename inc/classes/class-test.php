<?php
/**
 * Theme bootstrap file.
 *
 * @package Test
 */

namespace Test;

use Test\Block_Extensions\Media_Text_Interactive;
use Test\Traits\Singleton;
use Test\Assets;

/**
 * Class Test
 *
 * @since 1.0.0
 */
class Test {

	use Singleton;

	/**
	 * Constructor.
	 */
	protected function __construct() {
		// Instantiate classes.
		Assets::get_instance();

		// Setup hooks.
		$this->setup_hooks();
		$this->block_extensions();
	}

	/**
	 * Setup hooks.
	 *
	 * @since 1.0.0
	 */
	public function setup_hooks() {
		add_action( 'after_setup_theme', [ $this, 'test_support' ] );
	}

	/**
	 * Add required theme support.
	 *
	 * @since 1.0.0
	 */
	public function test_support() {
		// Add support for core block styles.
		add_theme_support( 'wp-block-styles' );
	}

	/**
	 * Block extensions
	 *
	 * @since 1.0.0
	 */
	public function block_extensions() {
		Media_Text_Interactive::get_instance();
	}
}
