<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class Paid implements State
{

    public function cancelOrder(Order $order): string
    {

        $order->setState(new Cancelled());

        return 'Cancelling your order...';
    }

    public function proceedToNext(Order $order): string
    {
        $order->setState(new Shipped());

        return 'Shipping your order now.';
    }
}
