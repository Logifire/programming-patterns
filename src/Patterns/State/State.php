<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

interface State
{

    public function cancelOrder(Order $order): string;

    public function proceedToNext(Order $order): string;
}
