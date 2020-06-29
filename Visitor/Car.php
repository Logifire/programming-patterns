<?php
namespace Logifire\ProgrammingPatterns\Visitor;

/**
 * A composite object that can enumerate its elements
 */
class Car
{

    /**
     * @var CarElementInterface[]
     */
    private $elements = [];

    public function __construct(Door $door, Engine $engine)
    {
        $this->elements = [$door, $engine];
    }

    public function accept(CarElementVisitorInterface $visitor): void
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }
}
