<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=0;$i<10;$i++)
        {
            $produit = (new Produit)
            ->setNom("produit$i")
            ->setDureeDeConservation(10+$i);
            $manager->persist($produit);
        }

        $manager->flush();
    }
}
