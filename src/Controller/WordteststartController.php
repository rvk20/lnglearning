<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\WordsToLearn;
use App\Entity\WordsLearned;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Security\CustomAuthenticator;
use ContainerJ1WR2RI\getDoctrine_QueryDqlCommandService;
use Doctrine\ORM\Mapping\Id;

class WordteststartController extends AbstractController
{
    /**
     * @Route("/starttest", name="wordteststart")
     */
    public function index()
    {

         
           if (!$this->getUser()) {
            return $this->redirectToRoute('start');
        }

if (isset($_SESSION['wordteststartstatus']))
{
    if($_SESSION['wordteststartstatus'] == false)
           {
               return $this->redirectToRoute('wordtest');
           }
}


        
          

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userid = $user->getId();

        $wordsrepo = $this->getDoctrine()
                    ->getRepository(WordsToLearn::class);

                    
                     
        $words = $wordsrepo->findBy(
            ['language' => $_SESSION['language'],
            'users_id' => $userid]
            );
        
            
        if(!isset($words[0]))
        {
            return $this->redirectToRoute('wordtest');
        }
        
        $elements = count($words);
        $rand = rand(0,$elements-1);
        $lang = $_SESSION['language'];

        $correctans = " ";
        
        $answer = " ";
        $question = $words[$rand]->getTranslation();        
        $correctansword = "";
        $mark = "";
        if(isset($_SESSION['learned']))
        {
            $mark = $_SESSION['learned'];
        }
        if(isset($_POST['submit'])){	
            
                $ans = $_POST['answer'];

               
                $id = $words[$_SESSION['rn']]->getId();
                $entityManager = $this->getDoctrine()->getManager();
                $word = $entityManager->getRepository(WordsToLearn::class)->find($id);
                $progress = $word->getProgress();
                if($progress==NULL)
                {
                    $progress = 0;
                }

                if($words[$_SESSION['rn']]->getWord() == $ans)
                {
                    $progress++;
                    if($progress==10)
                    {
                        $Learned = new WordsLearned();
                        $Learned->setUsersId($userid);
                        $Learned->setWord($word->getWord());
                        $Learned->setLanguage($word->getLanguage());
                        $entityManager->remove($word);
                        $entityManager->flush();
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($Learned);
                        $em->flush();
                        $_SESSION['learned'] = 'Słowo nauczone';
                        return $this->redirectToRoute('wordteststart');
                    }
                    else
                    {
                        $word->setProgress($progress);
                        $entityManager->flush();
                    }
                    
                    $answer = "Poprawna odpowiedź!";
                    $mark = "✅";
                    $correctansword = $words[$_SESSION['rn']]->getWord();
                    $_SESSION['sumcorr']++;

                }
                else
                {
                    $word->setProgress(0);
                    $entityManager->flush();
                    $answer = "Niepoprawna odpowiedź!";                     
                    $mark = "❌";
                    $correctansword = $words[$_SESSION['rn']]->getWord();
                }
                if($_SESSION['sum'] == 14)
                {
                    $answer = $_SESSION['sumcorr'] . "/15";
                    $question =  "Zakończono";
                }
                if($_SESSION['sum'] == 15)
                {
                    return $this->redirectToRoute('wordtest');
                }



                $_SESSION['sum']++;
               // $answer = $_SESSION['wordteststartstatus'];

            
            


            
        }

       

         
        $_SESSION['rn'] = $rand;

        return $this->render('wordteststart/index.html.twig', [
            'question' => $question,
            'answer' => $answer,
            'correctansword' => $correctansword,
            'mark' => $mark,
            'language' => $lang

        ]);
    }
}