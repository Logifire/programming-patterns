<?php
namespace Logifire\ProgrammingPatterns\Patterns\Bridge;

/**
 * Implementor
 * 
 * Quote:
 * 
 * An interface used by the Abstraction to talk to a subsystem-specific implementation.
 */
interface Device
{

    public function isTurnedOn(): bool;

    public function turnOn(): void;

    public function turnOff(): void;

    public function setVolume(int $percent): void;
}
