<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OfferController extends AbstractController
{
    #[Route('/offer', name: 'app_offer')]
    public function index(): Response
    {

        $abonnements = [
            "Entreprise et industriel" => ["1 an gratuit", "130€ / an"],
            "Commissionnaire" => ["1 an gratuit", "130€ / an"],
            "Transporteur" => ["2 mois gratuit", "79.90€ / an"],
        ];

        
        return $this->render('offer/index.html.twig', [
            'abonnements' => $abonnements
    ]);
    }
}
