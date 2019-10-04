<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class Paid implements State
{

    public function cancelOrder(Order $order): void
    {
        echo 'Cancelling your order...';

        $cancel_order_state = new Cancelled();
        $order->setState($cancel_order_state);
    }

    public function proceedToNext(Order $order): void
    {
        echo 'Shipping your order now.';
        $order->setState(new Shipped());
    }
}
