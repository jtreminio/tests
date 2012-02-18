<?php

require_once 'FizzBuzz.php';

/**
 * FizzBuzzTest
 */
class FizzBuzzTest extends PHPUnit_Framework_TestCase {

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testFizzBuzzThrowsExceptionWhenFirstParameterIsNotNumeric()
	{
		FizzBuzz('foo', 3, 5);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testFizzBuzzThrowsExceptionWhenFirstParameterIsNotGreaterThanZero()
	{
		FizzBuzz(-1, 3, 5);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testFizzBuzzThrowsExceptionWhenSecondParameterIsNotNumeric()
	{
		FizzBuzz(100, 'foo', 5);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testFizzBuzzThrowsExceptionWhenSecondParameterIsNotGreaterThanZero()
	{
		FizzBuzz(100, -3, 5);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testFizzBuzzThrowsExceptionWhenThirdParameterIsNotNumeric()
	{
		FizzBuzz(100, 3, 'foo');
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testFizzBuzzThrowsExceptionWhenThirdParameterIsNotGreaterThanZero()
	{
		FizzBuzz(100, 3, -5);
	}

}