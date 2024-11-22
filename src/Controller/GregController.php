<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GregController extends AbstractController
{

    //ici nous avons la route de notre methode /bonjour/+paramettre  URL qui est destiné à être récuperé en tant que variable({nom})

    #[Route('/bonjour/{nom}', name: 'app_greg')]
    // La méthode index qui prends en parametre une variable de type chaine de caractères qui pa défaut prendra la valeur de 'invité' si elle est vide
    public function index(string $nom = 'invité'): Response
    { 
        return $this->render('greg/index.html.twig', [
            'controller_name' => 'Greg',
            //Ici nous passons la valeur de la variable $nom à la vue
            'nom' => $nom,
        ]);
    }
    }
