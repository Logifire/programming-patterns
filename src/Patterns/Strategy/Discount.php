<?php
namespace Logifire\ProgrammingPatterns\Patterns\Strategy;

interface Discount
{

    public function calculate(float $price): float;
}
