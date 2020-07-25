<?php
namespace Logifire\ProgrammingPatterns\FactoryMethodDto;

/**
 * Data Transfer Object
 * 
 * @link https://en.wikipedia.org/wiki/Data_transfer_object
 */
class User
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    public function __construct(string $email, string $username)
    {
        $this->email = $email;
        $this->username = $username;
    }

    /**
     * Factory method
     */
    public static function fromArray(array $data): self
    {
        ["email" => $email, "username" => $username] = $data;
        $user = new self($email, $username);
        return $user;
    }

    /**
     * Returns the objects state as an array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
