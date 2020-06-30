<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Strategy
 */
class PremiumDiscountStrategy implements DiscountStrategyInterface
{

    public function calculate(float $price): float
    {
        return $price * 0.8;
    }
}
