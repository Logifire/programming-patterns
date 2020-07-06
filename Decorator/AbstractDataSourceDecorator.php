<?php

namespace Logifire\ProgrammingPatterns\Decorator;

class AbstractDataSourceDecorator
{
    /**
     * @var DataSourceInterface
     */
    protected $data_source;

    public function __construct(DataSourceInterface $data_source)
    {
        $this->data_source = $data_source;
    }
}