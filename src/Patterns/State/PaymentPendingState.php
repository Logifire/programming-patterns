<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class PaymentPendingState implements State
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
        echo 'Cancelling your unpaid order...';

        $cancel_order_state = new CancelledOrderState($this->order);
        $this->order->setState($cancel_order_state);
    }

    public function verifyPayment(): void
    {
        echo 'Payment verified. Shipping soon.';

        $order_being_prepared = new OrderBeingPreparedState($this->order);
        $this->order->setState($order_being_prepared);
    }

    public function shipOrder(): void
    {
        echo 'Cannot ship the order when payment is pending.';
    }
}
