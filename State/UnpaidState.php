<?php
namespace Logifire\ProgrammingPatterns\State;

/**
 * Initialized state
 */
class UnpaidState implements StateInterface
{

    public function cancelOrder(Order $order): string
    {
        $order->setState(new CancelledState());

        return 'Cancelling your unpaid order...';
    }

    public function proceedToNext(Order $order): string
    {
        $order->setState(new PaidState());

        return 'Payment verified. Shipping soon.';
    }
}
