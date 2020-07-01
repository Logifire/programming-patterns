<?php
namespace Logifire\ProgrammingPatterns\Bridge;

/**
 * Concrete Implementor
 */
class RadioDevice implements DeviceInterface
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
