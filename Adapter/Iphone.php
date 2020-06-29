<?php
namespace Logifire\ProgrammingPatterns\Adapter;

/**
 * Adaptee - object that doesen't support the desired interface
 */
class Iphone implements LightningPhoneInterface
{

    public function useLightning(): string
    {
        return 'Iphone is charing';
    }
}
