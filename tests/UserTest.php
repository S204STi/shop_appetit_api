<?php

use Laravel\Lumen\Testing\DatabaseTransactions;


class UserClass extends TestCase {
	public function testOne() {
		$user = [];
		$this->assertEmpty($user);
	}

	/**
   * @depends testOne
   */
	public function testTwo() {
		// $this
	}
}
