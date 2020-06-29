<?php
namespace Logifire\ProgrammingPatterns\AbstractFactory;

class LinuxButton implements ButtonInterface
{
    
    public function getValue(): string
    {
        return 'Linux Button';
    }
}
