<?php
namespace Logifire\ProgrammingPatterns\Patterns\Strategy;

class GuestDiscount implements Discount
{

    public function calculate(float $price): float
    {
        return $price;
    }
}
