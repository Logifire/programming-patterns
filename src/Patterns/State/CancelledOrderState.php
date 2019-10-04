<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class CancelledOrderState implements State
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
        echo 'Your order has already been cancelled.';
    }

    public function shipOrder(): void
    {
        echo 'Order cannot ship, it was cancelled.';
    }

    public function verifyPayment(): void
    {
        echo 'Order cancellled, you cannot verify payment.';
    }
}
