<?php
namespace Logifire\ProgrammingPatterns\AbstractFactory;

/**
 * Concrete factory.
 */
class LinuxLookAndFeelFactory implements LookAndFeelAbstractFactoryInterface
{

    public function createButton(): ButtonInterface
    {
        return new LinuxButton();
    }

    public function createTextField(): TextFieldInterface
    {
        return new LinuxTextField();
    }
}
