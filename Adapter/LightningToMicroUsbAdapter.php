<?php
namespace Logifire\ProgrammingPatterns\Adapter;

/**
 * Adapter
 */
class LightningToMicroUsbAdapter implements MicroUsbPhoneInterface
{

    /**
     * @var LightningPhoneInterface
     */
    private $phone;

    public function __construct(LightningPhoneInterface $phone)
    {

        $this->phone = $phone;
    }

    public function useMicroUsb(): string
    {
        return $this->phone->useLightning();
    }
}
