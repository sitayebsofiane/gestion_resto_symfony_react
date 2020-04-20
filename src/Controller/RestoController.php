<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestoController extends AbstractController
{
    /**
     * @Route("/resto", name="resto")
     */
    public function index()
    {
        return $this->render('resto/index.html.twig', [
           
        ]);
    }
}
