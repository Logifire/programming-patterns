<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

class Shipped implements State
{

    public function cancelOrder(Order $order): string
    {
        return 'You cannot cancel, already shipped...';
    }

    public function proceedToNext(Order $order): string
    {
        return 'Already shipped...';
    }
}
