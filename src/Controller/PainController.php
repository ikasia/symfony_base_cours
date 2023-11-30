<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/pain", name: "pain_")]
class PainController extends AbstractController
{
    #[Route('/', name: 'pain')]
    public function index(): Response
    {
        return $this->render('pain/index.html.twig', [
            'controller_name' => 'PainController',
        ]);
    }

    #[Route('/liste', name: 'liste')]
    public function liste(): Response
    {
        return $this->render('sauce/liste_pain.html.twig', [
            'pain' => 'BurgerController',
        ]);
    }
}
