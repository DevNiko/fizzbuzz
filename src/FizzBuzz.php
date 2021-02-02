<?php

declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzz implements FizzBuzzable
{
    const NAME = 'FizzBuzz';

    use FizzBuzzTrait;

    /**
     * @inheritDoc
     */
    public function applicable(int $position): bool
    {
        return ($position % 3 === 0) && ($position % 5 === 0);
    }
}