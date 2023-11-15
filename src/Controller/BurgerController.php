<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/burger", name: "burger_")]
class BurgerController extends AbstractController
{
    #[Route('/', name: 'burger')]
    public function index(): Response
    {
        return $this->render('burger/index.html.twig', [
            'controller_name' => 'BurgerController',
        ]);
    }

    #[Route('/liste', name: 'liste')]
    public function liste(): Response
    {
        return $this->render('burger/liste_burger.html.twig', [
            'burgers' => 'BurgerController',
        ]);
    }
    // public function liste(BurgerRepository $burgerRepository): Response
    // {
    //     $burgers = $burgerRepository->findAll();
    
    //     return $this->render('burger/liste_burger.html.twig', [
    //         'burgers' => $burgers,
    //     ]);
    // }
}
