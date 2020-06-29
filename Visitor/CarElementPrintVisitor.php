<?php
namespace Logifire\ProgrammingPatterns\Visitor;

/**
 * Concrete visitor
 */
class CarElementPrintVisitor implements CarElementVisitorInterface
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
