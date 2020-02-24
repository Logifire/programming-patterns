<?php
namespace Logifire\ProgrammingPatterns\Patterns\Visitor;

class CarElementPrintVisitor implements CarElementVisitor
{

    public function visitDoor(Door $door): void
    {
        echo "Visiting door \n";
    }

    public function visitEngine(Engine $engine): void
    {
        echo "Visiting engine \n";
    }
}
