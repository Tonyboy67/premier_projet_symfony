<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home/{prenom?World}/{age?54}', name: 'home')]
    public function index(string $prenom, int $age): Response
    {
        $julius="Fais le signe Jules"; 
        $pokemons=[
            'pikachou',
            'salameche',
            'florizard'
        ];
        $ninja=[
            'village'=>'Kunoha',
            'renard'=>'Kurama',
            
    ];

    return $this->render('home/index.html.twig', [
        'prenom'=>$prenom,
        'julius'=>$julius,
        'age'=>$age,
        'pokemons'=>$pokemons,
        'ninja'=>$ninja
    ]);


    }
}
