<?php
namespace Logifire\ProgrammingPatterns\Adapter;

class Android implements MicroUsbPhoneInterface
{

    public function useMicroUsb(): string
    {
        return 'Android phone is charging';
    }
}
