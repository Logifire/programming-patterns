<?php
namespace Logifire\ProgrammingPatterns\Patterns\FactoryMethod;

/**
 * Concrete product
 */
class SanFranciscoPepperoniPizza implements Pizza
{
    
    public function getIngredients(): string
    {
        return 'Pepperoni';
    }
}
