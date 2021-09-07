<?php

namespace Logifire\ProgrammingPatterns\TemplateMethod;

abstract class AbstractDataMiner
{
    /**
     * Template method: lets subclasses override specific steps of the 
     * algorithm without changing its structure.
     */
    public function mine(string $path): string
    {
        // Perform operations common for miners...
        $data = $this->loadData($path);

        // Call template method for data specific operations
        $result = $this->analyzeData($data);

        return $result;
    }

    private function loadData(string $path): string
    {
        return "Data based on {$path}";
    }

    abstract protected function analyzeData(string $data): string;
}