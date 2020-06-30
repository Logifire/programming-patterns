<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Strategy
 */
class NoDiscountStrategy implements DiscountStrategyInterface
{

    public function calculate(float $price): float
    {
        return $price;
    }
}
