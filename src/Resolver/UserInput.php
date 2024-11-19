<?php

declare(strict_types=1);

namespace App\Resolver;

use App\Resolver\Contract\InputValueResolverInterface;

class UserInput implements InputValueResolverInterface
{
    private string $email;

    private string $password;

    private string $username;

    public function __construct(string $email, string $password, string $username)
    {
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
