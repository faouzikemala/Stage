<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
	/** @var UserPasswordHasherInterface */
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setLogin("admin");
        $user->setPassword($this->passwordHasher->hashPassword($user, "admin"));
		$user->setRoles(['ROLE_SUPER_ADMIN']);
		$user->setEntity(1);
		
        /*$user->setRefInt(mt_rand(10, 100));
		$user->setAdmin('product '.$i);
        $user->setEmployee(mt_rand(10, 100));
		$user->setFkEstablishment('product '.$i);
        $user->setDatec(mt_rand(10, 100));
		$user->setTms('product '.$i);
        $user->setFkUserCreat(mt_rand(10, 100));
		$user->setFkUserModif('product '.$i);
        $user->setDatec(mt_rand(10, 100));*/
        $manager->persist($user);

        $manager->flush();
    }
}
