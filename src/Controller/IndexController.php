<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Entity\Words;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Security\CustomAuthenticator;
use App\Entity\WordsToLearn;





class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */

    public function index(Request $request)
    {
        if (!$this->getUser()) {
        return $this->redirectToRoute('start');
    }
     
        $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername();       
        //$user = $user->getUsername();
       
        $_SESSION['wordteststartstatus'] = false;

        return $this->render('index/index.html.twig', [
            'username' => $user
        ]);
           
        
     
           
        
    

    }

   


    
}
