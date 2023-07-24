<?php

// good example, single-line array
$a = [ 'a', 'b', 'c', 'd', 'e' ];

// good example, single-line array
$a = ['a' => '1', 'b' => '2', 'c' => '3', 'd' => '4', 'e' => '5',];

// good example, single-line array, without trailing comma
$a = ['a' => '1', 'b' => '2', 'c' => '3', 'd' => '4', 'e' => '5'];

// good example, multi-line array (empty)
$a = [
];

// good example, multi-line array (line comments)
$a = [
	'a',
	'b',
];

// good example, single-line array
$a = [ 'a', 'b', 'c', 'd', 'e' ];

// good example, single-line array (empty)
$a = [];

// good example, single-line array (block comment)
$a = [ 'a', 'b' /* ... */ ];

// bad example, single-line array
$a = ['a' => '1','b' => '2', 'c' => '3', 'd' => '4', 'e' => '5'];

// bad example, single-line array
$a = [ 'a','b','c','d', 'e' ];

// bad example, single-line array (block comment)
$a = [ 'a','b', /* ... */ ];


