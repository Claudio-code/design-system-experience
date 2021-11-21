<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/test', name: 'getAllUser', methods: 'GET')]
    public function index(): JsonResponse
    {
        return $this->json([
            'ok'
        ]);
    }

    #[Route('/store', name: 'storeUser', methods: 'POST')]
    public function store(): JsonResponse
    {
        return $this->json(['qa']);
    }
}
