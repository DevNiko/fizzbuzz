<?php

use PHPUnit\Framework\TestCase;
use \FizzBuzz\Fizz;
use FizzBuzz\Buzz;
use \FizzBuzz\FizzBuzz;
use \FizzBuzz\FizzBuzzProducer;

class FizzBuzzProducerTest extends TestCase
{
    private FizzBuzzProducer $fizzBuzzProducer;

    public function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzzProducer = new FizzBuzzProducer(
            new Fizz(),
            new Buzz(),
            new FizzBuzz()
        );
    }

    public function fizzBuzzDataProvider()
    {
        return [
            [0, ''],
            [1, '1'],
            [2, '2'],
            [3, Fizz::NAME],
            [5, Buzz::NAME],
            [10, Buzz::NAME],
            [15, FizzBuzz::NAME],
            [30, FizzBuzz::NAME],
            [33, Fizz::NAME],
            [53, '53'],
            [55, Buzz::NAME],
            [60, FizzBuzz::NAME],
            [66, Fizz::NAME],
            [98, '98'],
            [99, Fizz::NAME],
            [100, Buzz::NAME],
        ];
    }

    /**
     * @dataProvider fizzBuzzDataProvider
     */
    public function testcreateOutput($position, $expectedResult): void
    {
        $actualResult = $this->fizzBuzzProducer->createOutput($position);

        $this->assertIsString($actualResult);
        $this->assertEquals(
            $expectedResult . PHP_EOL,
            $actualResult,
        );
    }
}