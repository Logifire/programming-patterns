<?php
namespace Logifire\ProgrammingPatterns\Patterns\Visitor;

class Engine implements CarElement
{
    
    public function accept(CarElementVisitor $visitor): void
    {
        $visitor->visitEngine($this);
    }
}
