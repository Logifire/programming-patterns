<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Implementations of this will be the strategies.
 */
interface DiscountInterface
{

    public function calculate(float $price): float;
}
