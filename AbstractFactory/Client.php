<?php

namespace Logifire\ProgrammingPatterns\AbstractFactory;

$autoload_path = realpath('../vendor/autoload.php');

require $autoload_path;

/**
 * Quotes:
 *
 * Abstract Factory is a creational design pattern that lets you produce families of related objects without
 * specifying their concrete classes.
 */
class Client
{

    /**
     * @param LookAndFeelAbstractFactoryInterface $abstract_factory Represents the abstract factory - you code against an abstraction.
     */
    public function buildGui(LookAndFeelAbstractFactoryInterface $abstract_factory): void
    {
        /*
         * The classes of the concrete products from the abstract factory are unknown.
         */
        $text_field = $abstract_factory->createTextField();

        $button = $abstract_factory->createButton();

        echo
        $text_field->getContent(),
        "\n",
        $button->getValue(),
        "\n";
    }

    public function run(): void
    {
        // *** Run program ***
        // User wants Windows look

        $windows_look = new WindowsLookAndFeelFactory();
        $this->buildGui($windows_look);
        /*
         * Outputs:
         * Windows Text Field
         * Windows Button
         */

        // *** or ***
        // User wants Linux look

        $linux_look = new LinuxLookAndFeelFactory();
        $this->buildGui($linux_look);
        /*
         * Outputs:
         * Linux Text Field
         * Linux Button
         */
    }
}
(new Client())->run();
