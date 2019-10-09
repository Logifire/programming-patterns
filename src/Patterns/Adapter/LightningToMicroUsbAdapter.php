<?php
namespace Logifire\ProgrammingPatterns\Patterns\Adapter;

/**
 * Adapter
 */
class LightningToMicroUsbAdapter implements MicroUsbPhone
{

    /**
     * @var LightningPhone
     */
    private $phone;

    public function __construct(LightningPhone $phone)
    {

        $this->phone = $phone;
    }

    public function useMicroUsb(): string
    {
        return $this->phone->useLightning();
    }
}
