<?php
namespace Logifire\ProgrammingPatterns\Patterns\Strategy;

class RegularDiscount implements Discount
{

    public function calculate(float $price): float
    {
        return $price * 0.9;
    }
}
