<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SportController extends Controller
{
    /**
     * @Route("/sport", name="sport")
     */
    public function indexAction(Request $request)
    {
        $em=$this->getDoctrine()->getEntityManager();

        $articles = $em->createQueryBuilder()
            ->select('n')
            ->from('AppBundle:News','n')
            ->where("n.category = 'S'")
            ->addOrderBy('n.createdate','DESC')
            ->getQuery()
            ->getResult();
        // replace this example code with whatever you need
        return $this->render('categories/sport/sportview.html.twig', [
            'articles' => $articles
        ]);
    }
}