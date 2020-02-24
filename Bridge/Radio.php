<?php
namespace Logifire\ProgrammingPatterns\Patterns\Bridge;

/**
 * Concrete Implementor
 */
class Radio implements Device
{

    /**
     * @var bool
     */
    private $status = false;

    /**
     * @var int
     */
    private $volume = 25;

    public function isTurnedOn(): bool
    {
        $this->status = true;
    }

    public function setVolume(int $percent): void
    {
        $this->volume = $percent;
    }

    public function turnOff(): void
    {
        $this->status = false;
    }

    public function turnOn(): void
    {
        $this->status = true;
    }
}
