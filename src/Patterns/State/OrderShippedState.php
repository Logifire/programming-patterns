<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class OrderShippedState implements State
{

    /**
     * @var Order
     */
    private $order;

    public function __construct(Order $order)
    {

        $this->order = $order;
    }

    public function cancelOrder(): void
    {
        echo 'You cannot cancel, already shipped...';
    }

    public function payOrder(): void
    {
        echo 'You cannot verify payment, already shipped...';
    }

    public function shipOrder(): void
    {
        echo 'You cannot ship it again, already shipped...';
    }
}
