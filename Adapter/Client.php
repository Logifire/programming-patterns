<?php
namespace Logifire\ProgrammingPatterns\Adapter;

$autoload_path = realpath('../vendor/autoload.php');

require $autoload_path;

/**
 * Quotes:
 *
 * Convert the interface of a class into another interface clients expect. 
 * Adapter lets classes work together that couldn't otherwise because of incompatible interfaces.
 */
class Client
{

    public function run(): void
    {
        $phone = new Iphone();
        $adapter = new LightningToMicroUsbAdapter($phone);
        $charger = new MicroUsbCharger($adapter);
        echo $charger->charge(); // Outputs: Iphone is charging
    }
}

(new Client())->run();
