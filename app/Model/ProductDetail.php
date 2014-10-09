<?php
App::uses('AppModel', 'Model');
/**
 * ProductDetail Model
 *
 */
class ProductDetail extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'product_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'product_name';

}
