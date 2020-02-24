<?php
namespace Logifire\ProgrammingPatterns\Patterns\Bridge;

/**
 * Concrete Implementor
 */
class Tv implements Device
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
        return $this->status;
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
