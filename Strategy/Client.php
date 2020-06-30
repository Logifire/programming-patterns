<?php
namespace Logifire\ProgrammingPatterns\Strategy;

$path = realpath('../vendor/autoload.php');

require $path;

/**
 * Quotes:
 * 
 * Define each algorithm/strategy in a separate class, with a common interface.
 * 
 * Use when:
 * …you have many classes that differ in their behaviour. Strategies allow to configure a class with one of many behaviours.
 */
class Client
{

    public function run(): void
    {
        $no_discount = new NoDiscountStrategy();
        // Default strategy
        $shopping_cart = new ShoppingCart($no_discount);

        $price = $shopping_cart->checkout(100);
        echo "Common customer price: {$price}\n"; // $price = 100

        $regular_discount = new RegularDiscountStrategy();
        // Set new strategy
        $shopping_cart->setDiscount($regular_discount);

        $price = $shopping_cart->checkout(100);
        echo "Regular customer price: {$price}"; // $price = 90
    }
}

(new Client())->run();
