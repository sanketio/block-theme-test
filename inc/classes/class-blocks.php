<?php
/**
 * Class Blocks.
 *
 * @package Test
 */

namespace Test;

use Test\Traits\Singleton;

/**
 * Class Blocks.
 */
class Blocks {

	use Singleton;

	/**
	 * Constructor.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 *
	 * @since 1.0.0
	 */
	public function setup_hooks() {
		add_action( 'init', array( $this, 'register_blocks' ) );
	}

	/**
	 * Register gutenberg blocks.
	 */
	public function register_blocks() {
		if ( ! defined( 'TEST_BUILD_DIR' ) ) {
			return;
		}
		// Get all the blocks from the build directory.
		$blocks_dir = TEST_BUILD_DIR . '/blocks';
		if ( ! file_exists( $blocks_dir ) || ! is_dir( $blocks_dir ) ) {
			return;
		}

		// List all subdirectories in 'inc/blocks' directory.
		$blocks = array_filter( glob( $blocks_dir . '/*' ), 'is_dir' );

		// Register each block.
		foreach ( $blocks as $block ) {
			register_block_type( $block );
		}
	}
}
