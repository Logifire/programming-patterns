<?php

namespace Logifire\ProgrammingPatterns\TemplateMethod;

abstract class AbstractDataMiner
{

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

    /**
     * Template method: Abstract method to perform operations that can't 
     * be generalized in the parent class.
     */
    abstract protected function analyzeData(string $data): string;
}