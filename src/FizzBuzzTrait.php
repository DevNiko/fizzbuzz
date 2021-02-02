<?php

declare(strict_types=1);

namespace FizzBuzz;

trait FizzBuzzTrait
{
    /**
     * Returns a cli printable line
     *
     * @param string $eol Defines the line ending
     * @return string
     */
    public function printOut(string $eol): string
    {
        return self::NAME . $eol;
    }
}