<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VilleController extends AbstractController
{

    #[Route('/ville/{ville?Paris}/{habitants?65}', name: 'ville')]
    public function index(string $ville, int $habitants): Response
    {
        $habitants*=1000;
           return $this->render(
            'ville/index.html.twig', 
            [
            'ville' => $ville,
            'habitants'=> $habitants
            ]
    );
    }
}
