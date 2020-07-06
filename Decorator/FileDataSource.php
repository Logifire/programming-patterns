<?php

namespace Logifire\ProgrammingPatterns\Decorator;

class FileDataSource implements DataSourceInterface
{

    public function read(): string
    {
        // Empty
        return '';
    }

    public function write(string $data): void
    {
        $data = "[Write]{$data}[/Write]";
        echo "{$data}\n";
    }
}