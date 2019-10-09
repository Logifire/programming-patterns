<?php
namespace Logifire\ProgrammingPatterns\Patterns\Adapter;

/**
 * Adaptee
 */
class Iphone implements LightningPhone
{

    public function useLightning(): string
    {
        return 'Iphone is charing';
    }
}
