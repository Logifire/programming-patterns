<?php
namespace Logifire\ProgrammingPatterns\Patterns\TemplateMethod;

class CsvMiner extends DataMiner
{

    protected function analyzeData(string $data): string
    {
        // Analyze algorithm
        return 'Analyzed CSV data...';
    }
}
