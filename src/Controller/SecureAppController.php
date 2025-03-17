<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecureAppController extends AbstractController
{
    #[Route('/secure/app', name: 'app_secure_app')]
    public function index(): Response
    {
        return $this->render('secure_app/index.html.twig', [
            'controller_name' => 'SecureAppController',
        ]);
    }
}
