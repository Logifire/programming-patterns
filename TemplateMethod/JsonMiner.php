<?php

namespace Logifire\ProgrammingPatterns\TemplateMethod;

class JsonMiner extends AbstractDataMiner
{

    /**
     * Template method
     */
    protected function analyzeData(string $data): string
    {
        // Analyze algorithm
        return 'Analyzed JSON data...';
    }
}