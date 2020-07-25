<?php
namespace Logifire\ProgrammingPatterns\FactoryMethodDto;

class UserService
{

    public function getUser(string $email): User
    {
        // Use `$email` to fetch some data from e.g. a database or http request.
        $fetched_user_data = ['email' => 'example@example.org', 'username' => 'example'];
        
        // Call the factory method on the data transfer object (DTO).
        $user = User::fromArray($fetched_user_data);
        
        return $user;
    }
}
