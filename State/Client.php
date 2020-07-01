<?php

namespace Logifire\ProgrammingPatterns\State;

$path = realpath('../vendor/autoload.php');

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
class Client
{

    public function run(): void
    {

        // Context
        $order = new Order();

        echo
        "{$order->proceedToNext()} \n", // Payment verified. Shipping soon.
        "{$order->proceedToNext()} \n", // Shipping your order now.
        "{$order->proceedToNext()} \n", // Already shipped... 
        "{$order->cancel()} \n"; // You cannot cancel, already shipped...
    }
}
(new Client())->run();
