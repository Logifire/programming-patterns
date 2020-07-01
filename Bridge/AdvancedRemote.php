<?php
namespace Logifire\ProgrammingPatterns\Bridge;

/**
 * Refined Abstraction
 * 
 * Quote:
 * 
 * A version of the Abstraction, customized for a particular application.
 */
class AdvancedRemote extends AbstractRemote
{

    public function mute(): void
    {
        $this->device->setVolume(0);
    }
}
