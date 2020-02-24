<?php
namespace Logifire\ProgrammingPatterns\Patterns\FactoryMethod;

/**
 * Concrete product
 */
class ChicagoCheesePizza implements Pizza
{
    
    public function getIngredients(): string
    {
        return 'Cheese';
    }
}
