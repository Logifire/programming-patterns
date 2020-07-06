<?php

namespace Logifire\ProgrammingPatterns\TemplateMethod;

$autoload_path = realpath('../vendor/autoload.php');

require $autoload_path;

/**
 * Quote:
 *
 * The framework provides a set of superclasses that do 90 percent of the work, deferring application
 * specific operations to abstract methods.
 */
class Client
{

    public function run(): void
    {
        $file_path      = 'path-to-file';
        $csv_miner = new CsvMiner();
        echo $csv_miner->mine($file_path); // Outputs: Analyzed CSV data...

        $json_miner = new JsonMiner();
        echo $json_miner->mine($file_path); // Outputs: Analyzed JSON data...
    }
}
(new Client())->run();
