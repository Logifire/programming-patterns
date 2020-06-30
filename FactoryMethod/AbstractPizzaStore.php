<?php
namespace Logifire\ProgrammingPatterns\FactoryMethod;

/**
 * Creator
 * Defines a method that needs to create an object whose actual type is unknown.
 */
abstract class AbstractPizzaStore
{

    abstract protected function createPizza(): PizzaInterface;

    public function orderPizza(): PizzaInterface
    {
        $pizza = $this->createPizza();
        return $pizza;
    }
}
