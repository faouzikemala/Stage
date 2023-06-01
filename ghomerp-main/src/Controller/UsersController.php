<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class UsersController extends AbstractController
{

    public function __construct()
    {
    }

    public function __invoke(Book $data): Book
    {

    }
}
