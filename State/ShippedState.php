<?php
namespace Logifire\ProgrammingPatterns\State;

class ShippedState implements StateInterface
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
