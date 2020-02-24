<?php
namespace Logifire\ProgrammingPatterns\Patterns\Bridge;

/**
 * Abstraction
 * 
 * Implementations of this may have different signatures/structures.
 * 
 */
abstract class Remote
{

    /**
     * @var Device
     */
    protected $device;

    public function __construct(Device $device)
    {

        $this->device = $device;
    }

    public function togglePower(): void
    {
        if ($this->device->isTurnedOn()) {
            $this->device->turnOff();
        } else {
            $this->device->turnOn();
        }
    }
}
