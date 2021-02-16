<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use FizzBuzz\FizzBuzzProducer;
use FizzBuzz\Fizz;
use FizzBuzz\Buzz;
use FizzBuzz\FizzBuzz;

$fizzBuzzOutputLength = 100;
if (defined('STDIN')) {
    $fizzBuzzOutputLength = isset($argv[1]) ? $argv[1] : $fizzBuzzOutputLength;
}

$fizzBuzzProducer = new FizzBuzzProducer(new Fizz(), new Buzz(), new FizzBuzz());

$fizzBuzzGenerator = function (int $index) use ($fizzBuzzProducer): Generator {
    yield $fizzBuzzProducer->createOutput($index);
};

for ($index = 1; $index <= $fizzBuzzOutputLength; $index++) {
    fwrite(STDOUT, ...$fizzBuzzGenerator($index));
}