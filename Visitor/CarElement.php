<?php
namespace Logifire\ProgrammingPatterns\Patterns\Visitor;

interface CarElement
{

    public function accept(CarElementVisitor $visitor): void;
}
