<?php

/**
 * @return void
 */
function wfFooFoo () {
	// The below should start with wg...
	global $someotherglobal;
	$someotherglobal = 5;
}
