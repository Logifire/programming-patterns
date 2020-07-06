<?php
namespace Logifire\ProgrammingPatterns\Visitor;

$autoload_path = realpath('../vendor/autoload.php');

require $autoload_path;

/**
 * Quotes:
 * 
 * Visitors can collect information or perform operations on all the elements of some aggregation.
 * 
 * A Visitor is, in a way, a "visiting strategy".
 *
 * Visitors can accumulate state as the visit elements.
 */
class Client
{

    public function run(): void
    {
        $door = new Door();
        $engine = new Engine();
        $car = new Car($door, $engine);

        $visitor = new CarElementPrintVisitor();

        $car->accept($visitor);

        /*
         * Outputs:
         * Visiting door 
         * Visiting engine 
         */
    }
}

(new Client())->run();
