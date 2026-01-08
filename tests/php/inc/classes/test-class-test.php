<?php
/**
 * Test if class Test exists.
 *
 * @package Test
 */

use Test\Tests\TestCase;
use Test\Test;

/**
 * Class Test_Test
 */
class Test_Test extends TestCase {

	/**
	 * Test if class Test exists.
	 *
	 * @since 1.0.0
	 */
	public function test_class_exists() {
		$this->assertTrue( class_exists( 'Test\Test' ) );
	}

	/**
	 * Test if class Test is a singleton.
	 *
	 * @since 1.0.0
	 */
	public function test_class_is_singleton() {
		$this->assertTrue( Test::get_instance() instanceof Test );
	}

	/**
	 * Test if class Test has a method 'setup_hooks'.
	 *
	 * @since 1.0.0
	 */
	public function test_class_has_method_setup_hooks() {
		$this->assertTrue( method_exists( 'Test\Test', 'setup_hooks' ) );
	}

	/**
	 * Test if class Test has a method 'test_support'.
	 *
	 * @since 1.0.0
	 */
	public function test_class_has_method_test_support() {
		$this->assertTrue( method_exists( 'Test\Test', 'test_support' ) );
	}
}
