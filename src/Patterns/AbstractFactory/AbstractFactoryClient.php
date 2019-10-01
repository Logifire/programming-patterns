<?php
namespace Logifire\ProgrammingPatterns\Patterns\AbstractFactory;

$path = __DIR__ . '/../../../vendor/autoload.php';

require $path;

class AbstractFactoryClient
{

    /**
     * @param LookAndFeel $look_and_feel Represents the abstract factory - you code against an abstraction.
     */
    public function buildGui(LookAndFeel $look_and_feel): void
    {
        /*
         * The classes (concrete products) of the abstract factory are unknown.
         */
        $text_field = $look_and_feel->createTextField();

        $button = $look_and_feel->createButton();

        echo
        $text_field->getContent(),
        "\n",
        $button->getValue(),
        "\n";
    }

    public function run(): void
    {
        // User wants Windows look

        $windows_look = new WindowsLookAndFeel();
        $this->buildGui($windows_look);
        /*
         * Outputs:
         * Windows Text Field
         * Windows Button
         */

        // User wants Linux look

        $linux_look = new LinuxLookAndFeel();
        $this->buildGui($linux_look);
        /*
         * Outputs:
         * Linux Text Field
         * Linux Button
         */
    }
}

(new AbstractFactoryClient())->run();
