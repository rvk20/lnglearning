<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Words;
use App\Entity\Text;
use App\Entity\Questions;
use App\Entity\Answers;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class PaneladminController extends AbstractController
{
    /**
     * @Route("/sfvaca!!a587ccw22", name="paneladmin")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('start');
        }
        $username = $this->get('security.token_storage')->getToken()->getUser();
        $username = $username->getUsername();

        if($username != 'admin')
        {
            return $this->redirectToRoute('index');
        }

        
        

            

        
            if(isset($_POST['addword'])){
                
                $word = new Words();
                $word->setWord($_POST['word']);
                $word->setTranslation($_POST['translation']);
                $word->setLanguage($_POST['language']);
                $em = $this->getDoctrine()->getManager();
                $em->persist($word);
                $em->flush();
            
            }	


            if(isset($_POST['addText'])){
                

                $text = new Text();
                $text->setType($_POST['type']);
                $text->setName($_POST['name']);
                $text->setText($_POST['text']);
                $text->setLevel($_POST['level']);
                $text->setLanguage($_POST['language']);
                $em = $this->getDoctrine()->getManager();
                $em->persist($text);
                $em->flush();
                $em = $this->getDoctrine()->getManager();
                $id = $em->getRepository(Text::class);
                $id = $id->findOneBy(['name' => $_POST['name'],
                'type' => $_POST['type']]);
                $id = $id->getId();
                $question1 = new Questions();
                $question1->setTextid($id);
                $question1->setQuestion($_POST['question1']);
                $question2 = new Questions();
                $question2->setTextid($id);
                $question2->setQuestion($_POST['question2']);
                $question3 = new Questions();
                $question3->setTextid($id);
                $question3->setQuestion($_POST['question3']);
                $question4 = new Questions();
                $question4->setTextid($id);
                $question4->setQuestion($_POST['question4']);
                $question5 = new Questions();
                $question5->setTextid($id);
                $question5->setQuestion($_POST['question5']);
                $em->persist($question1);
                $em->persist($question2);
                $em->persist($question3);
                $em->persist($question4);
                $em->persist($question5);
                $em->flush();
                $em = $this->getDoctrine()->getManager();
                $questions = $em->getRepository(Questions::class);

                $question1 = $questions->findOneBy(
                    ['question' => $_POST['question1'],
                    'textid' => $id]
                    );
                $question1 = $question1->getId();
                $question2 = $questions->findOneBy(
                    ['question' => $_POST['question2'],
                    'textid' => $id]
                    );
                $question2 = $question2->getId();
                $question3 = $questions->findOneBy(
                    ['question' => $_POST['question3'],
                    'textid' => $id]
                    );
                $question3 = $question3->getId();
                $question4 = $questions->findOneBy(
                    ['question' => $_POST['question4'],
                    'textid' => $id]
                    );
                $question4 = $question4->getId();
                $question5 = $questions->findOneBy(
                    ['question' => $_POST['question5'],
                    'textid' => $id]
                    );
                $question5 = $question5->getId();

                $answerc1 = new answers();
                $answer11 = new answers();
                $answer21 = new answers();
                $answerc2 = new answers();
                $answer12 = new answers();
                $answer22 = new answers();
                $answerc3 = new answers();
                $answer13 = new answers();
                $answer23 = new answers();
                $answerc4 = new answers();
                $answer14 = new answers();
                $answer24 = new answers();
                $answerc5 = new answers();
                $answer15 = new answers();
                $answer25 = new answers();

                //question1
                $answerc1->setQuestionid($question1);
                $answerc1->setAnswer($_POST['answerc1']);
                $answerc1->setCorrect(1);
                $answer11->setQuestionid($question1);
                $answer11->setAnswer($_POST['answer11']);
                $answer11->setCorrect(0);
                $answer21->setQuestionid($question1);
                $answer21->setAnswer($_POST['answer21']);
                $answer21->setCorrect(0);

                //question2
                $answerc2->setQuestionid($question2);
                $answerc2->setAnswer($_POST['answerc2']);
                $answerc2->setCorrect(1);
                $answer12->setQuestionid($question2);
                $answer12->setAnswer($_POST['answer12']);
                $answer12->setCorrect(0);
                $answer22->setQuestionid($question2);
                $answer22->setAnswer($_POST['answer22']);
                $answer22->setCorrect(0);

                //question3
                $answerc3->setQuestionid($question3);
                $answerc3->setAnswer($_POST['answerc3']);
                $answerc3->setCorrect(1);
                $answer13->setQuestionid($question3);
                $answer13->setAnswer($_POST['answer13']);
                $answer13->setCorrect(0);
                $answer23->setQuestionid($question3);
                $answer23->setAnswer($_POST['answer23']);
                $answer23->setCorrect(0);

                //question4
                $answerc4->setQuestionid($question4);
                $answerc4->setAnswer($_POST['answerc4']);
                $answerc4->setCorrect(1);
                $answer14->setQuestionid($question4);
                $answer14->setAnswer($_POST['answer14']);
                $answer14->setCorrect(0);
                $answer24->setQuestionid($question4);
                $answer24->setAnswer($_POST['answer24']);
                $answer24->setCorrect(0);

                //question5
                $answerc5->setQuestionid($question5);
                $answerc5->setAnswer($_POST['answerc5']);
                $answerc5->setCorrect(1);
                $answer15->setQuestionid($question5);
                $answer15->setAnswer($_POST['answer15']);
                $answer15->setCorrect(0);
                $answer25->setQuestionid($question5);
                $answer25->setAnswer($_POST['answer25']);
                $answer25->setCorrect(0);
                    
                $em->persist($answerc1); 
                $em->persist($answer11);
                $em->persist($answer21);
                $em->persist($answerc2);
                $em->persist($answer12);
                $em->persist($answer22);
                $em->persist($answerc3);
                $em->persist($answer13);
                $em->persist($answer23);
                $em->persist($answerc4);
                $em->persist($answer14);
                $em->persist($answer24);
                $em->persist($answerc5);
                $em->persist($answer15);
                $em->persist($answer25);
                $em->flush();
            }	
           
            $z = $this->getDoctrine()->getManager();
            $users = $z->getRepository(User::class)
            ->findAll();

            $users = $paginator->paginate(
                $users,
                $request->query->getInt('page', 1),
                $request->query->getInt('limit', 10)
                
    
           );

        return $this->render('paneladmin/index.html.twig', [
            'users'=> $users
        ]);
    }
}
