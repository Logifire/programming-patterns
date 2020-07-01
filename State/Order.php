<?php
namespace Logifire\ProgrammingPatterns\State;

/**
 * Context
 */
class Order
{

    /**
     * @var StateInterface
     */
    private $state;

    public function __construct()
    {
        $this->state = new UnpaidState($this);
    }

    /**
     * @intenal
     */
    public function setState(StateInterface $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext(): string
    {
        return $this->state->proceedToNext($this);
    }

    public function cancel(): string
    {
        return $this->state->cancelOrder($this);
    }
}
