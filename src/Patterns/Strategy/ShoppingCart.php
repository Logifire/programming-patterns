<?php
namespace Logifire\ProgrammingPatterns\Patterns\Strategy;

class ShoppingCart
{

    /**
     * @var Discount
     */
    private $discount;

    public function __construct(Discount $discount)
    {
        $this->discount = $discount;
    }

    public function setDiscount(Discount $discount): void
    {
        $this->discount = $discount;
    }

    public function checkout(float $price): float
    {
        return $this->discount->calculate($price);
    }
}
