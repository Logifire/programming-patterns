<?php
namespace Logifire\ProgrammingPatterns\Patterns\Adapter;

$path = __DIR__ . '/../../../vendor/autoload.php';

require $path;

/**
 * Quotes:
 *
 * Convert the interface of a class into another interface clients expect. 
 * Adapter lets classes work together that couldn't otherwise because of incompatible interfaces.
 */
class AdapterClient
{

    public function run(): void
    {
        $phone = new Iphone();
        $adapter = new LightningToMicroUsbAdapter($phone);
        $charger = new MicroUsbCharger($adapter);
        echo $charger->charge(); // Outputs: Iphone is charing
    }
}

(new AdapterClient())->run();
