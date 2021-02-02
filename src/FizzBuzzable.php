<?php

declare(strict_types=1);

namespace FizzBuzz;

interface FizzBuzzable
{
    /**
     * @param int $position
     * @return bool
     */
    public function applicable(int $position): bool;

    /**
     * @return string
     */
    public function printOut(): string;
}