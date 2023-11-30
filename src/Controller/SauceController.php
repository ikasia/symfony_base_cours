<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/sauce", name: "sauce_")]
class SauceController extends AbstractController
{
    #[Route('/', name: 'sauce')]
    public function index(): Response
    {
        return $this->render('sauce/index.html.twig', [
            'controller_name' => 'SauceController',
        ]);
    }

    #[Route('/liste', name: 'liste')]
    public function liste(): Response
    {
        return $this->render('sauce/liste_sauce.html.twig', [
            'sauce' => 'BurgerController',
        ]);
    }


    #[Route('/ajout', name: 'creation', methods: ['GET', 'POST'])]
    public function creation(Request $request, EntityManagerInterface $em): Response
    {
        $sauce = new Sauce();
        $form = $this->createForm(SauceType::class, $sauce);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($sauce);
            $em->flush();
    
            $this->addFlash('success', 'Sauce créé!');
            return $this->redirectToRoute('sauce_liste');
        }
    
        return $this->render('sauce/ajout_sauce.html.twig', [
            'sauce' => $sauce,
            'form' => $form->createView()
        ]);
    }
}
