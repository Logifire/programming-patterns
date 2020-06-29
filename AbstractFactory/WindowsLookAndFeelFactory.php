<?php
namespace Logifire\ProgrammingPatterns\AbstractFactory;

/**
 * Concrete factory.
 */
class WindowsLookAndFeelFactory implements LookAndFeelAbstractFactoryInterface
{

    public function createButton(): ButtonInterface
    {
        return new WindowsButton();
    }

    public function createTextField(): TextFieldInterface
    {
        return new WindowsTextField();
    }
}
