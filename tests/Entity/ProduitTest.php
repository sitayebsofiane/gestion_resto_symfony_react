<?php

namespace App\Tests\Entity;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProduitTest extends KernelTestCase
{
    public function testValideEntity()
    {
        $produit = (new Produit)
        ->setNom("steck")
        ->setDureeDeConservation("250");
        self::bootKernel();
        $error=self::$container->get('validator')->validate($produit);
        $this->assertCount(0,$error);
       
    }
}
