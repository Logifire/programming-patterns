<?php
namespace Logifire\ProgrammingPatterns\Patterns\Adapter;

class MicroUsbCharger
{

    /**
     * @var MicroUsbPhone
     */
    private $phone;

    public function __construct(MicroUsbPhone $phone)
    {

        $this->phone = $phone;
    }

    public function charge(): string
    {
        return $this->phone->useMicroUsb();
    }
}
