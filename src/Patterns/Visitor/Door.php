<?php
namespace Logifire\ProgrammingPatterns\Patterns\Visitor;

class Door implements CarElement
{

    public function accept(CarElementVisitor $visitor): void
    {
        $visitor->visitDoor($this);
    }
}
