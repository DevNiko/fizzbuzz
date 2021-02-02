<?php

declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzzProducer
{
    private FizzBuzzable $fizz;
    private FizzBuzzable $buzz;
    private FizzBuzzable $fizzBuzz;

    /**
     * @param FizzBuzzable $fizz
     * @param FizzBuzzable $buzz
     * @param FizzBuzzable $fizzBuzz
     */
    public function __construct(FizzBuzzable $fizz, FizzBuzzable $buzz, FizzBuzzable $fizzBuzz)
    {
        $this->fizz = $fizz;
        $this->buzz = $buzz;
        $this->fizzBuzz = $fizzBuzz;
    }

    /**
     * Creates output for multiples of three "Fizz". For multiples of five "Buzz".
     * For position which are multiples of both three and five "FizzBuzz".
     * All other positions will be returned as string. Negative numbers will be ignored.
     *
     * @param int $position
     * @return string
     */
    public function createOutput(int $position, string $eol = ''): string
    {
        if ($eol === '') {
            $eol = PHP_EOL;
        }

        if ($position <= 0) {
            return '' . $eol;
        }

        if ($this->fizz->applicable($position) === true) {
            return $this->fizz->printOut($eol);
        }

        if ($this->buzz->applicable($position) === true) {
            return $this->buzz->printOut($eol);
        }

        if ($this->fizzBuzz->applicable($position) === true) {
            return $this->fizzBuzz->printOut($eol);
        }

        return (string)$position . $eol;
    }
}