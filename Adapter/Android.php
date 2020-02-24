<?php
namespace Logifire\ProgrammingPatterns\Patterns\Adapter;

class Android implements MicroUsbPhone
{

    public function useMicroUsb(): string
    {
        return 'Android phone is charing';
    }
}
