<?php
namespace Logifire\ProgrammingPatterns\FactoryMethod;

/**
 * Concrete creator
 */
class ChicagoPizzaStore extends AbstractPizzaStore
{
    
    protected function createPizza(): PizzaInterface
    {
        return new ChicagoCheesePizza();
    }
}
