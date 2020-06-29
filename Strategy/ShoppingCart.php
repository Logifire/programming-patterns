<?php
namespace Logifire\ProgrammingPatterns\Strategy;

class ShoppingCart
{

    /**
     * @var DiscountInterface
     */
    private $discount;

    public function __construct(DiscountInterface $default_strategy)
    {
        $this->discount = $default_strategy;
    }

    public function setDiscount(DiscountInterface $strategy): void
    {
        $this->discount = $strategy;
    }

    public function checkout(float $price): float
    {
        return $this->discount->calculate($price);
    }
}
