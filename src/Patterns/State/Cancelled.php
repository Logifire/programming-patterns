<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class Cancelled implements State
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
