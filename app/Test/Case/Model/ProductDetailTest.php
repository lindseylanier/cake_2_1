<?php
App::uses('ProductDetail', 'Model');

/**
 * ProductDetail Test Case
 *
 */
class ProductDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductDetail = ClassRegistry::init('ProductDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductDetail);

		parent::tearDown();
	}

}
