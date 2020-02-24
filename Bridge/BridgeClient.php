<?php
namespace Logifire\ProgrammingPatterns\Patterns\Bridge;

$path = __DIR__ . '/../../../vendor/autoload.php';

require $path;

/**
 * Quotes:
 *
 * To decouple subsystems. The two sides of the Bridge (Abstraction and Implementor) can change independently.
 * 
 */
class BridgeClient
{

    public function run(): void
    {
        $tv = new Tv(); // Subsystem-specific implementation of the Implementor
        $advanced_remote = new AdvancedRemote($tv); // Customized Abstraction for a particular application
        $advanced_remote->togglePower();
        $advanced_remote->mute();
    }
}

(new BridgeClient())->run();
