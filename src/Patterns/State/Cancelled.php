<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class Cancelled implements State
{

    public function cancelOrder(Order $order): void
    {
        echo 'Your order has already been cancelled.';
    }

    public function proceedToNext(Order $order): void
    {
        echo 'Order cancelled, you cannot verify payment.';
    }
}
