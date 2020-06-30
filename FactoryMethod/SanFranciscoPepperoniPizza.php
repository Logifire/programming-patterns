<?php
namespace Logifire\ProgrammingPatterns\FactoryMethod;

/**
 * Concrete product
 */
class SanFranciscoPepperoniPizza implements PizzaInterface
{
    
    public function getIngredients(): string
    {
        return 'Pepperoni';
    }
}
