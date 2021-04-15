<?php

// Don't warn on missing documentation, not testing that
// phpcs:disable MediaWiki.Commenting.FunctionComment

abstract class ExampleClass {

	// Methods that should be fixed

	public function getString() :string {
		return '';
	}

	protected function getBool() : bool {
		return false;
	}

	private function getInt():int {
		return 0;
	}

	abstract public function getAnotherString() : string;

	abstract protected function extraSpaces() :  string;

	abstract protected function extraSpaces2()  :  bool ;

	abstract protected function withNullable() :  ?string;

	abstract protected function withParameters(
		string $param,
		bool $paramTwo
	) : bool;

	// Methods that shouldn't change

	public function goodExample(): string {
		return '';
	}

	abstract protected function anotherGoodExample(): bool;
}
