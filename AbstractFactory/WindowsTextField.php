<?php
namespace Logifire\ProgrammingPatterns\AbstractFactory;

class WindowsTextField implements TextFieldInterface
{

    public function getContent(): string
    {
        return 'Windows Text Field';
    }
}
