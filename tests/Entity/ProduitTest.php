<?php

namespace App\Tests\Entity;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProduitTest extends KernelTestCase
{
    public function errorsTests(Produit $produit,$number=0)
    {
        self::bootKernel();
        $error=self::$container->get('validator')->validate($produit);
        $this->assertCount($number,$error);
    }
    public function getEntity() : Produit
    {
        return(new Produit)
        ->setNom("steck")
        ->setDureeDeConservation("24");
    }
    public function testValideEntity()
    {
        $this->errorsTests($this->getEntity(),0);
    }
    public function testInValideEntity()
    {
       $this->errorsTests($this->getEntity()->setNom("steck1"),1);
    }
}
