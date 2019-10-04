<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class Shipped implements State
{

    public function cancelOrder(Order $order): void
    {
        echo 'You cannot cancel, already shipped...';
    }

    public function proceedToNext(Order $order): void
    {
        echo 'Already shipped...';
    }
}
