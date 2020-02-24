<?php
namespace Logifire\ProgrammingPatterns\Patterns\FactoryMethod;

/**
 * Concrete creator
 */
class ChicagoPizzaStore extends PizzaStore
{
    
    protected function createPizza(): Pizza
    {
        return new ChicagoCheesePizza();
    }
}
