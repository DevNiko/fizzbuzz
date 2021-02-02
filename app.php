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

$fizzBuzzGenerator = function () use ($fizzBuzzProducer, $fizzBuzzOutputLength): Generator {
    for ($i = 1; $i <= $fizzBuzzOutputLength; $i++) {
        yield $fizzBuzzProducer->createOutput($i);
    }
};

foreach ($fizzBuzzGenerator() as $output) {
    fwrite(STDOUT, (string)$output);
}