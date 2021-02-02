<?php

declare(strict_types=1);

namespace FizzBuzz;

trait FizzBuzzTrait
{
    /**
     * Returns a cli printable line
     *
     * @return string
     */
    public function printOut(): string
    {
        return self::NAME . PHP_EOL;
    }
}