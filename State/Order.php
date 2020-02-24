<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

/**
 * Context
 */
class Order
{

    /**
     * @var State
     */
    private $state;

    public function __construct()
    {
        $this->state = new Unpaid($this);
    }

    /**
     * @intenal
     */
    public function setState(State $state): void
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
