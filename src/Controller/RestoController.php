<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestoController extends AbstractController
{
    /**
    * @Route("/", name="home")
    */
    public function index()
    {
        return $this->render('resto/index.html.twig', [
           
        ]);
    }
     /**
    * @Route("/produit", name="produit")
    */
    public function produit()
    {
        return $this->render('resto/produit.html.twig', [
           
        ]);
    }
}
