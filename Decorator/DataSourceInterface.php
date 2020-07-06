<?php

namespace Logifire\ProgrammingPatterns\Decorator;

interface DataSourceInterface
{

    public function write(string $data): void;

    public function read(): string;
}