<?php
namespace Logifire\ProgrammingPatterns\State;

class CancelledState implements StateInterface
{

    public function cancelOrder(Order $order): string
    {
        return 'Your order has already been cancelled.';
    }

    public function proceedToNext(Order $order): string
    {
        return 'Order cancelled, you cannot verify payment.';
    }
}
