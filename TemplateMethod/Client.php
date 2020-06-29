<?php

namespace Logifire\ProgrammingPatterns\TemplateMethod;

$path = realpath('../vendor/autoload.php');

require $path;

/**
 * Quote:
 *
 * The framework provides a set of superclasses that do 90 percent og the work, deferring application
 * specific operations to abstract methods.
 */
class Client
{

    public function run(): void
    {
        $path      = 'path-to-file';
        $csv_miner = new CsvMiner();
        echo $csv_miner->mine($path); // Outputs: Analyzed CSV data...

        $json_miner = new JsonMiner();
        echo $json_miner->mine($path); // Outputs: Analyzed JSON data...
    }
}
(new Client())->run();
