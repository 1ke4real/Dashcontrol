<?php

declare(strict_types=1);

namespace App\Controller;

use App\DTO\UserDTO;
use App\Entity\User;
use App\Resolver\UserInput;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user', name: 'user_')]
class UserController extends AbstractController
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
        private EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/register', name: 'register')]
    public function register(UserInput $input): Response
    {
        $user = new User(
            $input->getEmail(),
            $input->getUsername(),
        );
        $user->changePassword($this->passwordHasher->hashPassword($user, $input->getPassword()));
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $this->json(UserDTO::fromEntity($user));
    }
}
