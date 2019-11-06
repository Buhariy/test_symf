<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Users;
class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user =new Users();
        $user ->setNom("testn2")
              ->setPrenom("testpn2")
              ->setPseudo("testpseudo2")
              ->setMdp("azerty")
              ->setmail("azerty@mail.com")
              ->setDateN(new \Datetime);
        $manager->persist($user);
        $manager->flush();
    }
}
