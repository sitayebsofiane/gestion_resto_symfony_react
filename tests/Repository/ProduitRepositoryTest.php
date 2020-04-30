<?php
namespace App\Tests\Repository;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProduitRepositoryTest extends KernelTestCase
{
    public function testCount()
    {
        self::bootKernel();
        $produits=self::$container->get(ProduitRepository::class)->count([]);
        $this->assertEquals(10,$produits);
    }
}