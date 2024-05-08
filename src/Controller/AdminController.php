<?php

namespace App\Controller;

use App\Entity\Commandes;
use App\Entity\Devices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class AdminController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/admin1', name: 'app_admin')]
    public function index(): Response
    {

        $userRepository = $this->entityManager->getRepository(User::class);
        $userCount = $userRepository->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();


            $CommandesRepository = $this->entityManager->getRepository(Commandes::class);
            $CommandesCount = $CommandesRepository->createQueryBuilder('t')
                ->select('COUNT(t.id)')
                ->getQuery()
                ->getSingleScalarResult();


                $DevicesRepository = $this->entityManager->getRepository(Devices::class);
                $DevicesCount = $DevicesRepository->createQueryBuilder('d')
                    ->select('COUNT(d.id)')
                    ->getQuery()
                    ->getSingleScalarResult();



        // Now you can use $userCount to get the number of users
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'user_count' => $userCount,
            'Commandes_count' => $CommandesCount,
            'Devices_count' => $DevicesCount,
        ]);
    }
}
