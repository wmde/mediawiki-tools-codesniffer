<?php

if ( $a or $b ) {
	$c = $a and $b;
}

$foo = `echo "hi";`;

class  Foo  extends  \Bar  implements  \I1  ,  I2 {

	/**
	 * Do stuff
	 */
	public static function doStuff() {
		Foo::doStuff();
	}

	/**
	 * Test spacing in function and closue declaration
	 * @param string $a
	 * @param string $b
	 * @param string $c
	 * @param string $d
	 * @return bool
	 */
	public function func(  $a  ,  $b, $c, $d /*...*/  ) {
		return function ($e,$f) use (  $a  ,  $b  ) {
			return function () use (  $e  ) {
				return true;
			};
		};
	}
}

$s =  $sum/( ( 1<<16 )-1 )+2*-1*3-4^3%10;

$msg = wfMessage( 'message-key' ) -> inContentLanguage()
	-> text();

$str = '1'.$foo.$s.  '2'.
	'LONG LINE'
	.'MORELONGLINE';
