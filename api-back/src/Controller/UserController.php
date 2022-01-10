<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class UserController extends AbstractController
{
    public function __construct(TokenStorageInterface $tokenStorageInterface, JWTTokenManagerInterface $jwtManager)
    {
        $this->jwtManager = $jwtManager;
        $this->tokenStorageInterface = $tokenStorageInterface;
    }

    #[Route('api/me', name: 'me')]
    public function index(Request $request): Response
    {   
        try {
            $decodedJwtToken = $this->jwtManager->decode($this->tokenStorageInterface->getToken());
            $user = $this->getDoctrine()->getRepository(User::class)->findBy(array('email' => $decodedJwtToken['username']));
            return $this->json([$user[0]->getId(), $user[0]->getMessages(), $user[0]->getEmail()]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], Response::HTTP_UNAUTHORIZED);
        }
    }
}
