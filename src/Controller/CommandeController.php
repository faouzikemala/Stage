<?php

namespace App\Controller;

use App\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\CommandesType;

class CommandeController extends AbstractController
{

    #[Route('/Commande', name: 'app_commande', methods: ['GET','POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {



        $user = new Commandes();
        $form = $this->createForm(CommandesType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_merci', [], Response::HTTP_SEE_OTHER);
        }




        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
            'form' => $form->createView(),
        ]);
    }


    #[Route('/Commande/all', name: 'app_all_commande', methods: ['GET'])]
    public function showAllCommandes(EntityManagerInterface $entityManager): Response
    {
        $commandes = $entityManager->getRepository(Commandes::class)->findAll();

        return $this->render('commande/show_all.html.twig', [
            'commandes' => $commandes,
        ]);
    }
}
