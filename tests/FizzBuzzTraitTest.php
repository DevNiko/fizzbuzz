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
            [new Fizz(), '', 'Fizz'],
            [new Buzz(), '<br/>', 'Buzz<br/>'],
            [new FizzBuzz(), PHP_EOL,'FizzBuzz' . PHP_EOL],
        ];
    }

    /**
     * @dataProvider fizzBuzzTraitDataProvider
     */
    public function test_printOut($fizzBuzzObject, $eol, $expectedResult)
    {
        $actualResult = $fizzBuzzObject->printOut($eol);

        $this->assertIsString($actualResult);
        $this->assertEquals($expectedResult, $actualResult);
    }
}