<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro")
     */

    
    
    public function index($parametro, Request $request, Session $session){   
        
        return $this->render('registro/index.html.twig', [
            'controller_name' =>'DefaultController',
        ]);
    }

    
}
