<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

class WindowsTextField implements TextField
{

    public function getContent(): string
    {
        return 'Windows Text Field';
    }
}
