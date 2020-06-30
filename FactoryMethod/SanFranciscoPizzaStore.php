<?php
namespace Logifire\ProgrammingPatterns\FactoryMethod;

/**
 * Concrete creator
 */
class SanFranciscoPizzaStore extends AbstractPizzaStore
{

    protected function createPizza(): PizzaInterface
    {
        return new SanFranciscoPepperoniPizza;
    }
}
