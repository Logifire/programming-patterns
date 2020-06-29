<?php
namespace Logifire\ProgrammingPatterns\AbstractFactory;

class LinuxTextField implements TextFieldInterface
{

    public function getContent(): string
    {
        return 'Linux Text Field';
    }
}
