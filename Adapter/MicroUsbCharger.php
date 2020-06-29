<?php
namespace Logifire\ProgrammingPatterns\Adapter;

class MicroUsbCharger
{

    /**
     * @var MicroUsbPhoneInterface
     */
    private $phone;

    public function __construct(MicroUsbPhoneInterface $phone)
    {

        $this->phone = $phone;
    }

    public function charge(): string
    {
        return $this->phone->useMicroUsb();
    }
}
