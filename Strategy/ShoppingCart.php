<?php
namespace Logifire\ProgrammingPatterns\Strategy;

/**
 * Context
 */
class ShoppingCart
{

    /**
     * @var DiscountStrategyInterface
     */
    private $discount;

    public function __construct(DiscountStrategyInterface $default_strategy)
    {
        $this->discount = $default_strategy;
    }

    public function setDiscount(DiscountStrategyInterface $strategy): void
    {
        $this->discount = $strategy;
    }

    public function checkout(float $price): float
    {
        return $this->discount->calculate($price);
    }
}
