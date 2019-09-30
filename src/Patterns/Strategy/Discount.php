<?php
namespace Logifire\ProgrammingPatterns\Patterns\Strategy;

/**
 * Implementations of this will be the strategies.
 */
interface Discount
{

    public function calculate(float $price): float;
}
