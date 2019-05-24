<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity;

class FootballNewsController extends Controller
{
    /**
     * @Route("/footballnews", name="footballnews")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em=$this->getDoctrine()->getEntityManager();

        $articles = $em->createQueryBuilder()
                        ->select('n')
                        ->from('AppBundle:News','n')
                        ->where("n.type = 'Football'")
                        ->addOrderBy('n.createdate','DESC')
                        ->getQuery()
                        ->getResult();
        return $this->render('categories/sport/footballNewsView.html.twig', [
            'articles' => $articles
        ]);
    }
}