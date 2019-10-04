<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

/**
 * Initialized state
 */
class Unpaid implements State
{

    public function cancelOrder(Order $order): void
    {
        echo 'Cancelling your unpaid order...';

        $cancel_order_state = new Cancelled();
        $order->setState($cancel_order_state);
    }

    public function proceedToNext(Order $order): void
    {
        echo 'Payment verified. Shipping soon.';

        $order_being_prepared = new Paid();
        $order->setState($order_being_prepared);
    }
}
