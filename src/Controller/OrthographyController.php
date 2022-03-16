<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Questions;
use App\Entity\Answers;
use App\Entity\Text;
use App\Entity\Sessions;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class OrthographyController extends AbstractController
{
    /**
     * @Route("/orthography", name="orthography")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('start');
        }


        $em = $this->getDoctrine()->getManager();
        $quizs = $em->getRepository(Text::class)     
        ->findBy(['type' => 'Orthography']);
        
        $quizs = $paginator->paginate(
            $quizs,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10)
            

       );

        return $this->render('orthography/index.html.twig', [
            'quizs' => $quizs,
        ]);
    }
     /**
     * @Route("/orthography/{id}", name="ortography", methods={"GET","HEAD", "POST"})
     */
    public function test(int $id): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('start');
        }
        function rnd()
        {
            $r = rand(0,2);
            $tab[0] = $r;
            if($r==0)
            {
                $tab[1] = 1;
                $tab[2] = 2;
            }
            else if($r==1)
            {
                $tab[1] = 0;
                $tab[2] = 2;
            }
            else if($r==2)
            {
                $tab[1] = 0;
                $tab[2] = 1;
            }
            return $tab;
         }


        $c = $this->getDoctrine()
            ->getRepository(Text::class)
            ->find($id);
        
          
            $language = $c->getLanguage();
            $questions = $this->getDoctrine()
          ->getRepository(Questions::class);
          $questions = $questions->findBy(['textid' => $id]);
          $answers = $this->getDoctrine()
          ->getRepository(Answers::class);
          
        for($i=0; $i<=4; $i++)
        {   
            $anss = $answers->findBy(['questionid' => $questions[$i]->getId()]);
            $rnd = rnd();
        
            $quiz[$i] = [
                "question" => $questions[$i]->getQuestion() ,
                "id" => $questions[$i]->getId(),
                "answer1" => $anss[$rnd[0]]->getAnswer(),
                "correct1" => $anss[$rnd[0]]->getCorrect(),
                "answer2" => $anss[$rnd[1]]->getAnswer(),
                "correct2" => $anss[$rnd[1]]->getCorrect(),
                "answer3" => $anss[$rnd[2]]->getAnswer(),
                "correct3" => $anss[$rnd[2]]->getCorrect(),
            ];
        }
        //$array = $array[0][1];

        if(isset($_POST['submit'])){
            $score = 0;	
            
            for($i=0; $i<=4; $i++)
            {   
                if(!empty($_POST[$questions[$i]->getId()])) 
                {
                    $score += $_POST[$questions[$i]->getId()];
                    $_SESSION['score'] = $score;
                    
                }
            }
            
            $session = new Sessions();
            $session->setName($c->getName());
            $session->setType("Pisownia");
            $session->setCorrect($score);
            $session->setLevel($c->getLevel());
            $session->setDate(date("Y-m-d"));
            $cuser = $this->get('security.token_storage')->getToken()->getUser();
            $userid = $cuser->getId();
            $session->setUserid($userid);
            $em = $this->getDoctrine()->getManager();
            $em->persist($session);
            $em->flush();
            return $this->redirectToRoute('score');    
        }

        


        return $this->render('orthography/test.html.twig', [
            'quiz' => $quiz,
            'language' => $language,
            
            
        ]);
    }
}
