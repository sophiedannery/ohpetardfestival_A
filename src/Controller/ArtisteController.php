<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArtisteController extends AbstractController
{
    #[Route('/artiste', name: 'app_artiste')]
    public function index(): Response
    {
        return $this->render('artiste/index.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }


    #[Route('/artiste/zulu-project', name: 'app_artiste_zuluproject')]
    public function zuluProject(): Response
    {
        return $this->render('artiste/zulu-project.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }

    #[Route('/artiste/kris10', name: 'app_artiste_kris10')]
    public function kris10(): Response
    {
        return $this->render('artiste/kris10.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }

    #[Route('/artiste/secret', name: 'app_artiste_secret')]
    public function secret(): Response
    {
        return $this->render('artiste/secret.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }

    #[Route('/artiste/joube', name: 'app_artiste_joube')]
    public function joube(): Response
    {
        return $this->render('artiste/joube.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }

    #[Route('/artiste/narosound-chalawan', name: 'app_artiste_narosound_chalawan')]
    public function narosoundChalawan(): Response
    {
        return $this->render('artiste/narosound-chalawan.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }
}
