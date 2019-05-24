<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HandballController extends Controller
{
    /**
     * @Route("/handball", name="handball")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em=$this->getDoctrine()->getEntityManager();

        $articles = $em->createQueryBuilder()
            ->select('n')
            ->from('AppBundle:News','n')
            ->where("n.type = 'HANDBALL'")
            ->addOrderBy('n.createdate','DESC')
            ->getQuery()
            ->getResult();
        return $this->render('categories/sport/handballView.html.twig', [
            'articles' => $articles
        ]);
    }
}