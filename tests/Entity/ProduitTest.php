<?php

namespace App\Tests\Entity;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProduitTest extends KernelTestCase
{
    public function errorsTets(Produit $produit,$number=0)
    {
        self::bootKernel();
        $error=self::$container->get('validator')->validate($produit);
        $this->assertCount($number,$error);
    }
    public function getEntity() : Produit
    {
        return(new Produit)
        ->setNom("steck")
        ->setDureeDeConservation("250");

    }
    public function testValideEntity()
    {
        $this->errorsTets($this->getEntity(),0);
    }
    public function testInValideEntity()
    {
       $this->errorsTets($this->getEntity()->setNom("steck1"),1);
    }
}
