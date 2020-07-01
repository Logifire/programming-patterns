<?php
namespace Logifire\ProgrammingPatterns\Bridge;

$path = realpath('../vendor/autoload.php');

require $path;

/**
 * Quotes:
 *
 * To decouple subsystems. The two sides of the Bridge (Abstraction and Implementor) can change independently.
 * 
 */
class Client
{

    public function run(): void
    {
        $tv = new TvDevice(); // Subsystem-specific implementation of the Implementor
        $advanced_remote = new AdvancedRemote($tv); // Customized Abstraction for a particular application
        $advanced_remote->togglePower();
        $advanced_remote->mute();
    }
}

(new Client())->run();
