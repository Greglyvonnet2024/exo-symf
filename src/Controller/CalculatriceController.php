<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalculatriceController extends AbstractController
{
    #[Route('/calculatrice/{a}/{b}', name: 'app_calculatrice')]
    public function index(int $a, $b ): Response
    {
   

        return $this->render('calculatrice/index.html.twig', [
            'controller_name' => 'Calculatrice',
            'somme' => $a + $b,
            'a' => $a,
            'b' => $b

        ]);
    }
}
