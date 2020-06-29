<?php
namespace Logifire\ProgrammingPatterns\AbstractFactory;

class WindowsButton implements ButtonInterface
{

    public function getValue(): string
    {
        return 'Windows Button';
    }
}
