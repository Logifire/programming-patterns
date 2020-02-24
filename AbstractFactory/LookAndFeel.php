<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

/**
 * Abstract factory interface to the actual factories.
 * The factories are responsible for creating a family of products.
 */
interface LookAndFeel
{

    public function createButton(): Button;

    public function createTextField(): TextField;
}
