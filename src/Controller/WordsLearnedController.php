<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\WordsLearned;
use App\Entity\Sessions;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class WordsLearnedController extends AbstractController
{
    /**
     * @Route("/learned", name="words_learned")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('start');
        }

        $em = $this->getDoctrine()->getManager();
            $words = $em->getRepository(WordsLearned::class);
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $userid = $user->getId();        
            $words = $words->findBy(['users_id' => $userid]);

            $words = $paginator->paginate(
                $words,
                $request->query->getInt('page', 1),
                $request->query->getInt('limit', 10)
                
    
           );
           $sessions = $em->getRepository(Sessions::class);
           $sessions = $sessions->findBy(['userid' => $userid]);
           $sessions = $paginator->paginate(
            $sessions,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10)
            

       );
        return $this->render('words_learned/index.html.twig', [
            'words' => $words,
            'sessions' => $sessions,
        ]);
    }
}
