<?php

$arr = FizzBuzz(100, 3, 5);

print_r($arr);

/**
 * This function creates and iterates through a $count-length array.
 *
 * For every multiple of $match1, set the value as 'Fizz'
 * For every multiple of $match2, set the value as 'Buzz'
 * For every multiple of $match1 && $match2, set the value as 'FizzBuzz'
 *
 * Yes, this is an overly-complicated answer to such a simple question.
 *
 * @param int $count
 * @param int $match1
 * @param int $match2
 * @return array
 */
function FizzBuzz($count = 100, $match1 = 3, $match2 = 5)
{
	// All arguments must be integers
	if ( ! is_numeric($count) || ! is_numeric($match1) || ! is_numeric($match2))
	{
		throw new InvalidArgumentException('Not a number');
	}

	// All arguments must be greater than 0
	if ( $count < 1 || $match1 < 1 || $match2 < 1)
	{
		throw new InvalidArgumentException('Values must be greater than 0');
	}

	$arr = array();

	for($i = 0; $i < $count; $i++)
	{
		// $i is a multiple of both $match1 and $match2
		if ( ! ($i % $match1) &&  ! ($i % $match2))
		{
			$arr[$i] = 'FizzBuzz';
		}

		// $i is a multiple of $match1
		elseif ( ! ($i % $match1))
		{
			$arr[$i] = 'Fizz';
		}

		// $i is a multiple of $match2
		elseif ( ! ($i % $match2))
		{
			$arr[$i] = 'Buzz';
		}

		// $i is not a multiple of either properties
		else
		{
			$arr[$i] = $i;
		}
	}

	return $arr;
}