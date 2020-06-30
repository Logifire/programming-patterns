<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Strategy
 */
class RegularDiscountStrategy implements DiscountStrategyInterface
{

    public function calculate(float $price): float
    {
        return $price * 0.9;
    }
}
