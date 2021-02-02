<?php

declare(strict_types=1);

namespace FizzBuzz;

class Buzz implements FizzBuzzable
{
    const NAME = 'Buzz';

    use FizzBuzzTrait;

    /**
     * @inheritDoc
     */
    public function applicable(int $position): bool
    {
        return ($position % 5 === 0) && ($position % 3 !== 0);
    }
}