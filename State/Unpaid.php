<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

/**
 * Initialized state
 */
class Unpaid implements State
{

    public function cancelOrder(Order $order): string
    {
        $order->setState(new Cancelled());

        return 'Cancelling your unpaid order...';
    }

    public function proceedToNext(Order $order): string
    {
        $order->setState(new Paid());

        return 'Payment verified. Shipping soon.';
    }
}
