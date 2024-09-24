<?php
// tests/CalculatorTest.php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase {

    // assertEquals(): Checks if two values are equals.
    // assertNotEquals(): Checks if two values are not equals.
    // assertTrue(): Checks if a condition is true.
    // assertFalse(): Checks if a condition is false.
    // assertNull(): Checks if a value is null.
    // assertNotNull(): Checks if a value is not null.
    // assertInstanceOf(): Checks whether an object is an instance of a specific class.

    // setUp(): Method used to perform initializations before executing each test. This reduces code duplication and ensures a consistent initial state for each test.
    // tearDown(): Method used to clean up resources or perform clean-up actions after each test has been run. This ensures correct isolation between tests and avoids unwanted side effects.
    // expectException(): Method used to test whether a specific exception is raised when executing the code under test.

    protected $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    public function testAdd() {
        $this->assertEquals(4, $this->calculator->add(2, 2));
        $this->assertEquals(10, $this->calculator->add(5, 5));
    }

    public function testSubtract() {
        $this->assertEquals(3, $this->calculator->subtract(5, 2));
        $this->assertEquals(-2, $this->calculator->subtract(3, 5));
    }

    public function testMultiply() {
        $this->assertEquals(10, $this->calculator->multiply(2, 5));
        $this->assertEquals(-15, $this->calculator->multiply(3, -5));
    }

    public function testDivide() {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
        $this->assertEquals(3, $this->calculator->divide(9, 3));
    }

    public function testDivideByZero() {
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->divide(6, 0);
    }
}
