<?php
namespace Logifire\ProgrammingPatterns\Patterns\State;

$path = __DIR__ . '/../../../vendor/autoload.php';

require $path;

/**
 * Quotes:
 * 
 * Each state is represented by a State object that implements the behaviour of the 
 * Context object when the Context is in a given state.
 * 
 * Eliminates long, hard-to-maintain switch statements in the methods.
 * 
 * The state objects do implement a strategy for implementing a single state, but
 * the strategy is not provided by an outside entity.
 */
class StateClient
{

    public function run(): void
    {
        
        $order = new Order();
        $order->getState()->verifyPayment();
        $order->getState()->verifyPayment();
        $order->getState()->shipOrder();
        
        echo get_class($order->getState());
    }
}

(new StateClient())->run();
