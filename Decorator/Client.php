<?php

namespace Logifire\ProgrammingPatterns\Decorator;

$autoload_path = realpath('../vendor/autoload.php');

require $autoload_path;

/**
 * Quotes:
 *
 * Attach new responsibilities to (or modify the behavior of) an object at runtime.
 */
class Client
{

    public function run(): void
    {
        $my_data = 'My data';
        $source = new FileDataSource();
        $source->write($my_data);
        // [Write]My data[/Write]

        $source = new EncryptionDecorator($source);
        $source->write($my_data);
        // [Write][Encrypt]My data[/Encrypt][/Write]

        $source = new CompressionDecorator($source);
        $source->write($my_data);
        // [Write][Encrypt][Compress]My data[/Compress][/Encrypt][/Write]
    }
}
(new Client())->run();
