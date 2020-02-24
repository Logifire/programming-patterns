<?php
namespace Logifire\ProgrammingPatterns\Patterns\FactoryMethod;

/**
 * Creator
 * Defines a method that needs to create an object whose actual type is unknown.
 */
abstract class PizzaStore
{

    abstract protected function createPizza(): Pizza;

    public function orderPizza(): Pizza
    {
        $pizza = $this->createPizza();
        return $pizza;
    }
}
