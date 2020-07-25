<?php
namespace Logifire\ProgrammingPatterns\FactoryMethodDto;

$autoload_path = realpath('../vendor/autoload.php');

require $autoload_path;

/**
 * This shows the factory method on a data transfer object (DTO).
 * 
 * @see User::fromArray()
 * 
 * @link https://en.wikipedia.org/wiki/Data_transfer_object
 */
class Client
{

    public function run(): void
    {
        $service = new UserService();
        $user = $service->getUser('example@exmaple.org');

        print_r($user->toArray());
        /**
         * Outputs:
         * 
         * Array 
         * (
         *  [username] => example
         *  [email] => example@example.org
         * )
         */
    }
}

(new Client())->run();
