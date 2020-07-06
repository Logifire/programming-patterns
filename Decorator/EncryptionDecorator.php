<?php

namespace Logifire\ProgrammingPatterns\Decorator;

class EncryptionDecorator extends AbstractDataSourceDecorator implements DataSourceInterface
{

    public function read(): string
    {
        // Empty
        return '';
    }

    public function write(string $data): void
    {
        $data = "[Encrypt]{$data}[/Encrypt]";
        $this->data_source->write($data);
    }
}