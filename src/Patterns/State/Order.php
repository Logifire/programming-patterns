<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class Order
{

    /**
     * @var State
     */
    private $state;

    public function __construct()
    {
        $this->state = new PaymentPendingState($this);
    }

    /**
     * @intenal
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
