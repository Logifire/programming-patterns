<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Strategy
 */
class RegularDiscount implements DiscountInterface
{

    public function calculate(float $price): float
    {
        return $price * 0.9;
    }
}
