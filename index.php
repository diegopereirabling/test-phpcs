<?php

class Test {
	private $a;
	public $b;

	public function __construct($a): int {
		$this->a = $a;
	}

	function hola(): void {
		return $this->a;
	}
}
