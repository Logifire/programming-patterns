<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

class LinuxButton implements Button
{
    
    public function getValue(): string
    {
        return 'Linux Button';
    }
}
