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
            [0, '', PHP_EOL],
            [1, '\r\n', '1'],
            [2, PHP_EOL, '2'],
            [3, '', Fizz::NAME . PHP_EOL],
            [5, '\r\n', Buzz::NAME],
            [10, PHP_EOL, Buzz::NAME],
            [15, '\r\n', FizzBuzz::NAME],
            [30, PHP_EOL, FizzBuzz::NAME],
            [33, PHP_EOL, Fizz::NAME],
            [53, PHP_EOL, '53'],
            [55, PHP_EOL, Buzz::NAME],
            [60, '\r\n', FizzBuzz::NAME],
            [66, PHP_EOL, Fizz::NAME],
            [98, PHP_EOL, '98'],
            [99, PHP_EOL, Fizz::NAME],
            [100, '', Buzz::NAME . PHP_EOL],
        ];
    }

    /**
     * @dataProvider fizzBuzzDataProvider
     */
    public function testcreateOutput($position, $eol, $expectedResult): void
    {
        $actualResult = $this->fizzBuzzProducer->createOutput($position, $eol);

        $this->assertIsString($actualResult);
        $this->assertEquals(
            $expectedResult . $eol,
            $actualResult,
        );
    }
}