<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

/**
 * Concrete factory.
 */
class WindowsLookAndFeel implements LookAndFeel
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createTextField(): TextField
    {
        return new WindowsTextField();
    }
}
