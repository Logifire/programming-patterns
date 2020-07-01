<?php
namespace Logifire\ProgrammingPatterns\Bridge;

/**
 * Abstraction
 * 
 * Implementations of this may have different signatures/structures.
 * 
 */
abstract class AbstractRemote
{

    /**
     * @var DeviceInterface
     */
    protected $device;

    public function __construct(DeviceInterface $device)
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
