<?php

class TestClass {

	// Fail example start.

	public function testNoDoc( $testVar ) {
		return $testVar;
	}

	/**
	 * @param int $testVar This should start uppercase and end stop.
	 *
	 */
	public function testNeedReturn( $testVar ) {
		return $testVar;
	}
	/**
	 * @param int $testVar 	This is test.
	 * @param int $t 		For test.
	 * @return int $testVar This is test.
	 */
	public function testSpaces( $testVar, $t ) {
		return $testVar;
	}

	// Fail example end.
}
