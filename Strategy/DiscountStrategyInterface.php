<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Implementations of this will be the strategies.
 */
interface DiscountStrategyInterface
{

    public function calculate(float $price): float;
}
