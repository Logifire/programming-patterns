<?php
namespace Logifire\ProgrammingPatterns\Patterns\Strategy;

class PremiumDiscount implements Discount
{

    public function calculate(float $price): float
    {
        return $price * 0.8;
    }
}
