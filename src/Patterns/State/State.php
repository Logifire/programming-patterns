<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

interface State
{

    public function cancelOrder(): void;

    public function payOrder(): void;

    public function shipOrder(): void;
}
