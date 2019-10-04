<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class OrderBeingPreparedState implements State
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
        echo 'Cancelling your order...';

        $cancel_order_state = new CancelledOrderState($this->order);
        $this->order->setState($cancel_order_state);
    }

    public function verifyPayment(): void
    {
        echo 'Already verified your payment.';
    }

    public function shipOrder(): void
    {
        echo 'Shipping your order now.';

        $shipping_order_state = new OrderShippedState($this->order);
        $this->order->setState($shipping_order_state);
    }
}
