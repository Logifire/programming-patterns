<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

class LinuxTextField implements TextField
{

    public function getContent(): string
    {
        return 'Linux Text Field';
    }
}
