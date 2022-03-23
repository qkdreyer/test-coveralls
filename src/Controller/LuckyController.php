<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky', name: 'app_lucky')]
    public function index(Request $request): Response
    {
        $max = 100;

        if ($request->query->has('max')) {
            $max = \intval($request->query->get('max'));
        }

        return new JsonResponse([
            'number' => \random_int(0, $max),
        ]);
    }
}
