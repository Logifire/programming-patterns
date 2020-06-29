<?php
namespace Logifire\ProgrammingPatterns\Visitor;

/**
 * Element defines an "accept" operation that permits a Visitor to access it.
 */
interface CarElementInterface
{

    public function accept(CarElementVisitorInterface $visitor): void;
}
