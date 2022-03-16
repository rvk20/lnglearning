<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    /**
     * @Route("/", name="start")
     */
    public function start()
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('index');
        }

        return $this->render('start/index.html.twig', [
            'controller_name' => 'StartController',
        ]);
    }
}


