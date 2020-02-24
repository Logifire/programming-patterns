<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

class WindowsButton implements Button
{

    public function getValue(): string
    {
        return 'Windows Button';
    }
}
