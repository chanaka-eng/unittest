<?php
require 'app/Libraries/Calculator.php';
use App\Calculator;
class CalculatorTest extends PHPUnit_Framework_TestCase {
	public function testAddNumbers()
	{
		$calc  = new Calculator();
		$this->assertEquals(4, $calc->add(2, 2));
	}
}