<?php

declare(strict_types=1);

namespace App\DTO;

use App\Entity\User;

class UserDTO
{
    public function __construct(
        private string $email,
        private string $username,
    ) {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public static function fromEntity(User $user): self
    {
        return new self(
            $user->getEmail(),
            $user->getUsername(),
        );
    }
}
