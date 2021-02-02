<?php

use PHPUnit\Framework\TestCase;
use \FizzBuzz\Fizz;
use \FizzBuzz\Buzz;
use \FizzBuzz\FizzBuzz;
use \FizzBuzz\FizzBuzzTrait;

class FizzBuzzTraitTest extends TestCase
{
    use FizzBuzzTrait;

    public function fizzBuzzTraitDataProvider()
    {
        return [
            [new Fizz(), 'Fizz' . PHP_EOL],
            [new Buzz(), 'Buzz' . PHP_EOL],
            [new FizzBuzz(), 'FizzBuzz' . PHP_EOL],
        ];
    }

    /**
     * @dataProvider fizzBuzzTraitDataProvider
     */
    public function test_printOut($fizzBuzzObject, $expectedResult)
    {
        $actualResult = $fizzBuzzObject->printOut();

        $this->assertIsString($actualResult);
        $this->assertEquals($expectedResult, $actualResult);
    }
}