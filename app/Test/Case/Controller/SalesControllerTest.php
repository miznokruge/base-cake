<?php
App::uses('SalesController', 'Controller');

/**
 * SalesController Test Case
 *
 */
class SalesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sale',
		'app.salesorder',
		'app.customer',
		'app.salesman',
		'app.customer_bank',
		'app.bank',
		'app.state',
		'app.invoice',
		'app.salesordercomment',
		'app.salesorderdetail',
		'app.item',
		'app.sales_item',
		'app.items_tax',
		'app.sales_items_tax'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
