<?php
namespace Logifire\ProgrammingPatterns\Visitor;

class Engine implements CarElementInterface
{
    
    public function accept(CarElementVisitorInterface $visitor): void
    {
        $visitor->visitEngine($this);
    }
}
