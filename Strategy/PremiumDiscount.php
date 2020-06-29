<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Strategy
 */
class PremiumDiscount implements DiscountInterface
{

    public function calculate(float $price): float
    {
        return $price * 0.8;
    }
}
