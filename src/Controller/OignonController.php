<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/oignon", name: "oignon_")]
class OignonController extends AbstractController
{
    #[Route('/', name: 'oignon')]
    public function index(): Response
    {
        return $this->render('oignon/index.html.twig', [
            'controller_name' => 'OignonController',
        ]);
    }

    #[Route('/liste', name: 'liste')]
    public function liste(): Response
    {
        return $this->render('sauce/liste_oignon.html.twig', [
            'oignon' => 'BurgerController',
        ]);
    }
}
