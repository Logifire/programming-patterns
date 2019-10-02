<?php
namespace Logifire\ProgrammingPatterns\Patterns\Visitor;

interface CarElementVisitor
{
    public function visitDoor(Door $door): void;
    public function visitEngine(Engine $engine): void;
}
