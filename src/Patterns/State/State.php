<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

interface State
{

    public function cancelOrder(Order $order): void;

    public function proceedToNext(Order $order): void;
}
