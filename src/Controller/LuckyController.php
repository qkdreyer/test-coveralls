<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky', name: 'app_lucky')]
    public function index(): Response
    {
        return new JsonResponse([
            'number' => \random_int(0, 100),
        ]);
    }
}
