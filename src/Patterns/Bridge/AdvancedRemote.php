<?php
namespace Logifire\ProgrammingPatterns\Patterns\Bridge;

/**
 * Refined Abstraction
 * 
 * Quote:
 * 
 * A version of the Abstraction, customized for a particular application.
 */
class AdvancedRemote extends Remote
{

    public function mute(): void
    {
        $this->device->setVolume(0);
    }
}
