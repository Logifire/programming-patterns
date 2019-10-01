<?php
namespace Logifire\ProgrammingPatterns\Patterns\FactoryMethod;

/**
 * Product
 */
interface Pizza
{

    public function getIngredients(): string;
}
