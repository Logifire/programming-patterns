<?php

namespace Logifire\ProgrammingPatterns\TemplateMethod;

class CsvMiner extends AbstractDataMiner
{

    /**
     * Template method
     */
    protected function analyzeData(string $data): string
    {
        // Analyze algorithm
        return 'Analyzed CSV data...';
    }
}