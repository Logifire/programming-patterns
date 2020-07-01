<?php
namespace Logifire\ProgrammingPatterns\State;

class PaidState implements StateInterface
{

    public function cancelOrder(Order $order): string
    {

        $order->setState(new CancelledState());

        return 'Cancelling your order...';
    }

    public function proceedToNext(Order $order): string
    {
        $order->setState(new ShippedState());

        return 'Shipping your order now.';
    }
}
