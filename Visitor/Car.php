<?php
namespace Logifire\ProgrammingPatterns\Patterns\Visitor;

class Car
{

    /**
     * @var CarElement[]
     */
    private $elements = [];

    public function __construct(Door $door, Engine $engine)
    {
        $this->elements = [$door, $engine];
    }

    public function accept(CarElementVisitor $visitor): void
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }
}
