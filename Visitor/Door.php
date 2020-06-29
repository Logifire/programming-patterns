<?php
namespace Logifire\ProgrammingPatterns\Visitor;

class Door implements CarElementInterface
{

    public function accept(CarElementVisitorInterface $visitor): void
    {
        $visitor->visitDoor($this);
    }
}
