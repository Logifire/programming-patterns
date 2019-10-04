<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

interface State
{

    public function cancelOrder(): void;

    public function verifyPayment(): void;

    public function shipOrder(): void;
}
