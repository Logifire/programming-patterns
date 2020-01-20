<?php
namespace Logifire\ProgrammingPatterns\Patterns\TemplateMethod;

$path = __DIR__ . '/../../../vendor/autoload.php';

require $path;

class TemplateMethodClient
{

    public function run(): void
    {
        $path = 'path-to-file';
        $csv_miner = new CsvMiner();
        echo $csv_miner->mine($path); // Outputs: Analyzed CSV data...
        
        $json_miner = new JsonMiner();
        echo $json_miner->mine($path); // Outputs: Analyzed JSON data...
        
    }
}

(new TemplateMethodClient())->run();
