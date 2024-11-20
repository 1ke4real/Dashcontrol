<?php

declare(strict_types=1);

namespace App\Controller;

use App\DTO\UserDTO;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/auth', name: 'auth_')]
class AuthController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();

        if ($user === null) {
            return new JsonResponse(["error" => "Erreur lors de la connexion"], Response::HTTP_UNAUTHORIZED);
        }

        return $this->json(UserDTO::fromEntity($user));
    }
}
