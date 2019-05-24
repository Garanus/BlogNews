<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FootballController extends Controller
{
    /**
     * @Route("/football", name="football")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function displayAction($id)
    {
        $em=$this->getDoctrine()->getEntityManager();

        $article = $em->getRepository('AppBundle:News')->find($id);

        if(!$article){
            throw $this->createNotFoundException('Brak odpowiedniego wpisu');
        }
        return $this->render('categories/sport/footballView.html.twig', [
            'article' => $article
        ]);
    }
}