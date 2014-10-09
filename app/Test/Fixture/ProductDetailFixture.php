<?php
/**
 * ProductDetailFixture
 *
 */
class ProductDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => true, 'key' => 'primary'),
		'product_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_category' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'total_stock' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'product_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'product_id' => 1,
			'product_name' => 'Lorem ipsum dolor sit amet',
			'product_description' => 'Lorem ipsum dolor sit amet',
			'product_category' => 'Lorem ipsum dolor sit amet',
			'total_stock' => 1
		),
	);

}
