<?php
namespace Logifire\ProgrammingPatterns\Patterns\FactoryMethod;

/**
 * Concrete creator
 */
class SanFranciscoPizzaStore extends PizzaStore
{

    protected function createPizza(): Pizza
    {
        return new SanFranciscoPepperoniPizza;
    }
}
