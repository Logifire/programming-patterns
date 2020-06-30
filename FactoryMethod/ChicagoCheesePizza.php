<?php
namespace Logifire\ProgrammingPatterns\FactoryMethod;

/**
 * Concrete product
 */
class ChicagoCheesePizza implements PizzaInterface
{
    
    public function getIngredients(): string
    {
        return 'Cheese';
    }
}
