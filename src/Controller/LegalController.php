<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LegalController extends AbstractController
{
    #[Route('/legal', name: 'app_legal')]
    public function index(): Response
    {
        return $this->render('legal/index.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }

    #[Route('/mentions-legales', name: 'app_mentions_legales')]
    public function mentionsLegales(): Response
    {
        return $this->render('legal/mentions-legales.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }

    #[Route('/politiqut-de-confidentialite', name: 'app_politique_conf')]
    public function politiqueConfidentialite(): Response
    {
        return $this->render('legal/politique-de-confidentialite.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }
}
