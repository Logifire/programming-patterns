<?php
namespace Logifire\ProgrammingPatterns\Visitor;

/**
 * Visitor - Defines an interface that allows access to a concrete element
 */
interface CarElementVisitorInterface
{
    public function visitDoor(Door $door): void;
    public function visitEngine(Engine $engine): void;
}
