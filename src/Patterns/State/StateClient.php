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

        // Context
        $order = new Order();
        
        echo
        "{$order->getState()->payOrder()} \n",
        "{$order->getState()->payOrder()} \n",
        "{$order->getState()->shipOrder()} \n",
        "{$order->getState()->cancelOrder()} \n";
    }
}

(new StateClient())->run();
