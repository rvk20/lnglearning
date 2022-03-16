<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\WordsToLearn;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Security\CustomAuthenticator;
use ContainerJ1WR2RI\getDoctrine_QueryDqlCommandService;
use Doctrine\ORM\Mapping\Id;

class WordsTestController extends AbstractController
{
    /**
     * @Route("/wordtest", name="wordtest")
     */
    
    public function index()
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('start');
        }
           
        $words = $this->getDoctrine()
          ->getRepository(WordsToLearn::class);


        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userid = $user->getId();        
        $words = $words->findBy(['users_id' => $userid]);
        $elements = count($words);
        
        $rand = rand(0,$elements-1);
    
        $_SESSION['rn'] = $rand;
        $_SESSION['sum'] = 0;
        $_SESSION['sumcorr'] = 0;
        $languages = array();
        $langexists = false;
        if(isset($words[0]))
        {
            array_push($languages, $words[0]->getLanguage());
            for($i=1; $i<$elements; $i++)
            {
                $langcount = count($languages);
                for($j=0; $j<$langcount; $j++)
                {
                    if($words[$i]->getLanguage() == $languages[$j])
                    {
                        $langexists = true;
                    }
                }
                if($langexists == false)
                {
                    array_push($languages, $words[$i]->getLanguage());
                }
                $langexists = false;
            }      
        }
        else
        {
            $languages = "";
        }
        if(isset($_POST['submit'])){
            if(isset($_POST['language']))
            {
                $_SESSION['language'] = $_POST['language'];

                $_SESSION['wordteststartstatus'] = true;
                return $this->redirectToRoute('wordteststart');
            }

        }

        
        

        return $this->render('words_test/index.html.twig', [
            
            'languages' => $languages            
        ]);
    }
}
