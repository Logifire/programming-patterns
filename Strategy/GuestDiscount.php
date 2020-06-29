<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Strategy
 */
class GuestDiscount implements DiscountInterface
{

    public function calculate(float $price): float
    {
        return $price;
    }
}
