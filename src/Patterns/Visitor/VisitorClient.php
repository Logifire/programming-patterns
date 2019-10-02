<?php
namespace Logifire\ProgrammingPatterns\Patterns\Visitor;

$path = __DIR__ . '/../../../vendor/autoload.php';

require $path;

/**
 * Quotes:
 * 
 * Visitors can collect information or perform operations on all the elements of some aggregation.
 * 
 * A Visitor is, in a way, a "visiting strategy".
 */
class VisitorClient
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

(new VisitorClient())->run();