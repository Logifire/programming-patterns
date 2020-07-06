<?php

namespace Logifire\ProgrammingPatterns\Decorator;

class CompressionDecorator extends AbstractDataSourceDecorator implements DataSourceInterface
{
    
    public function read(): string
    {
        // Empty
        return '';
    }

    public function write(string $data): void
    {
        $data = "[Compress]{$data}[/Compress]";
        $this->data_source->write($data);
    }
}