<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

/**
 * Concrete factory.
 */
class LinuxLookAndFeel implements LookAndFeel
{

    public function createButton(): Button
    {
        return new LinuxButton();
    }

    public function createTextField(): TextField
    {
        return new LinuxTextField();
    }
}
