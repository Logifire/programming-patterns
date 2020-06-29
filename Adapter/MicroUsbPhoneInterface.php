<?php
namespace Logifire\ProgrammingPatterns\Adapter;

/**
 * Target - The interface you want the Adaptee to support
 * @see Iphone
 */
interface MicroUsbPhoneInterface
{

    public function useMicroUsb(): string;
}
