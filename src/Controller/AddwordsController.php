<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Entity\Words;
use App\Entity\WordsToLearn;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Security\CustomAuthenticator;
use ContainerJ1WR2RI\getDoctrine_QueryDqlCommandService;
use Doctrine\ORM\Mapping\Id;
use Knp\Component\Pager\PaginatorInterface;



class AddwordsController extends AbstractController
{
    /**
     * @Route("/add", name="addwords")
     */
    public function addwords(Request $request, PaginatorInterface $paginator)
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('register');
        }


        $words = array();
        
        $em = $this->getDoctrine()->getManager();
            $words = $em->getRepository(Words::class)
            ->findAll();
            
            
            
            if ($request->query->getAlnum('filter')) {
            $req =  $request->query->getAlnum('filter');            
                $words1 = array();
                        unset($word);
                        $word = $this->getDoctrine()
                        ->getRepository(Words::class);

                        $var1 = $word->findOneBy(['word' => $req]);
                        $var2 = $word->findBy(['translation' => $req]);
                           if ($var1) 
                            {
                              array_push($words1, $row = array( 'word' => $var1->getWord(), 'translation' => $var1->getTranslation(), 'language' =>  $var1->getLanguage(), 'Id' => $var1->getId()));
                            }
                            else if ($var2) 
                            {
                                $words1 = $var2;
                            }
        
                if($words1)
                {
                    $words = $words1;
                }
            }
         


       $words = $paginator->paginate(
            $words,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10)
            

       );
       
       
    

       if(isset($_POST['submit'])){	
        $cuser = $this->get('security.token_storage')->getToken()->getUser();
        $userid = $cuser->getId();
        $wordid = $_POST['submit'];
        $c = $this->getDoctrine()
            ->getRepository(Words::class)
            ->find($wordid);
        $cword = $c->getWord();
        $ctranslation = $c->getTranslation();
        $clanguage = $c->getLanguage();
        
        $WordToLearn = new WordsToLearn();
        $WordToLearn->setUsersId($userid);
        $WordToLearn->setWord($cword);
        $WordToLearn->setTranslation($ctranslation);
        $WordToLearn->setLanguage($clanguage);
        $em = $this->getDoctrine()->getManager();
        $em->persist($WordToLearn);
        $em->flush();

       }

       
       
        return $this->render('addwords/index.html.twig', [
            'words' => $words,
            
            
            
        ]);
    }
    


}
