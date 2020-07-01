<?php
namespace Logifire\ProgrammingPatterns\State;

interface StateInterface
{

    public function cancelOrder(Order $order): string;

    public function proceedToNext(Order $order): string;
}
