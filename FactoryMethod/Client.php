<?php
namespace Logifire\ProgrammingPatterns\FactoryMethod;

$autoload_path = realpath('../vendor/autoload.php');

require $autoload_path;

/**
 * Quotes:
 * 
 * Let subclasses decide which objects to instantiate.
 * 
 * This pattern is useful when you can do most of the work in the superclass level (creator) 
 * but want to put off deciding exactly which sort of object you'll be working on until runtime.
 */
class Client
{

    public function run(): void
    {
        /*
         *  The user chooses San Francisco Pizza Store
         */
        $sf_pizza_store = new SanFranciscoPizzaStore();
        $pizza = $sf_pizza_store->orderPizza();
        echo $pizza->getIngredients() . "\n"; // Outputs "Pepperoni".

        /*
         *  The user chooses Chicago Pizza Store.
         */
        $chicago_pizza_store = new ChicagoPizzaStore();
        $pizza = $chicago_pizza_store->orderPizza();
        echo $pizza->getIngredients(); // Outputs "Cheese".
    }
}

(new Client())->run();
