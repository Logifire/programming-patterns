<?php
namespace Logifire\ProgrammingPatterns\Patterns\TemplateMethod;

class JsonMiner extends DataMiner
{
    
    protected function analyzeData(string $data): string
    {
        // Analyze algorithm
        return 'Analyzed JSON data...';
    }
}
