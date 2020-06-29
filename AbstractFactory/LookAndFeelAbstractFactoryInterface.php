<?php
namespace Logifire\ProgrammingPatterns\AbstractFactory;

/**
 * Abstract factory interface used for the concrete factories.
 * The factories are responsible for creating a family of products.
 */
interface LookAndFeelAbstractFactoryInterface
{

    public function createButton(): ButtonInterface;

    public function createTextField(): TextFieldInterface;
}
